<?php

class Person
{
    public function sayHello()
    {
        echo 'Hello!';
    }
}

trait RollUp
{
    public function sayHello()
    {
        echo 'Hi!';
    }
}

class Student extends Person
{
    use RollUp;
}

$student = new Student();
$student->sayHello();
