<?php

    class Student{
        public $name = "Le van A";
        protected $email = "aa@gmail.com";
        private $address = "tphcm";

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }
    }

    $students = new Student();
    echo $students->name;
    echo $students->email;
    echo $students->address;
