<?php

    class Person{
        public $name = "Lê A";
        protected $phone = "04586895";
    }

    class Student extends Person{

    }

    $student = new Student();
    
    echo $student->name;
    echo $student->phone;