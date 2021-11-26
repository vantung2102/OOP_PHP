<?php

    class Student{
        public $name = "Le van A";
        protected $email = "aa@gmail.com";
        private $address = "tphcm";
    }

    $students = new Student();
    echo $students->name;
    echo $students->email;
    echo $students->address;
