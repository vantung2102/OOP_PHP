<?php

    class Student{
        public $name = "Le van A";
        protected $email = "aa@gmail.com";
        private $address = "tphcm";

        public function getEmail(){
            return $this->email . " at " . $this->getTime();
        }

        public function getAddress(){
            return $this->address;
        }

        public function getTime(){
            return date("d-m-yyyy", time());
        }
    }

    $students = new Student();
    echo $students->name;
    echo "</br>" . $students->getEmail();
    echo "</br>" . $students->getAddress();
