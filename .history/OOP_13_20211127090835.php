<?php

class Base
{
    private $foo = "foo_value";
    protected $bar = "bar_value";

    public function __sleep()
    {
        return array("\0Base\0foo", "\0*\0bar");
    }
}

class Derived extends Base
{
    public $baz = "baz_value";
    private $boo = "boo_value";

    public function __sleep()
    {
        // we have to merge our members with our parent's
        return array_merge(array("baz", "\0Derived\0boo"), parent::__sleep());
    }
}

class Leaf extends Derived
{
    private $qux = "qux_value";
    protected $zaz = "zaz_value";
    public $blah = "blah_value";

    public function __sleep()
    {
        // again, merge our members with our parent's
        return array_merge(array("\0Leaf\0qux", "\0*\0zaz", "blah"), parent::__sleep());
    }
}

// test it
$test = new Leaf();
$s = serialize($test);
$test2 = unserialize($s);
echo $s;
print_r($test);
print_r($test2);

// class A
// {
//     public $b;
//     public $name;
// }

// class B extends A
// {
//     public $parent;
//     public function __wakeup()
//     {
//         var_dump($parent->name);
//     }
// }

// $a = new A();
// $a->name = "foo";
// $a->b = new B();
// $a->b->parent = $a;
// $s = serialize($a);
// $a = unserialize($s);
