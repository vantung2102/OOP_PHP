<?php
class A
{
    public $b;
    public $name;
}

class B extends A
{
    public $parent;
    public function __wakeup()
    {
        var_dump($parent->name);
    }
}

$a = new A();
$a->name = "foo";
$a->b = new B();
$a->b->parent = $a;
$s = serialize($a);
$a = unserialize($s);