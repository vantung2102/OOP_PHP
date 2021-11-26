<?php

    class Student{
        public $name = "Le van A";
        protected $email = "aa@gmail.com";
        private $address = "tphcm";

        public function setEmail($email){
            $this->email = $email;
        }

        public function getEmail(){
            return $this->email;
        }
    }

    $students = new Student();
    echo $students->name;
    echo $students->getEmail();
    // echo $students->address;
