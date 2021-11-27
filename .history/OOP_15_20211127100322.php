<?php

use function PHPSTORM_META\type;

class TestClass
{
    public $foo;

    public function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function __toString()
    {
        return $this->foo;
    }
}

$class = new TestClass(1);
$a = gettype($class);
echo $a;
