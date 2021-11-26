<?php

    class Student{
        public $name = "Le van A";
        protected $email = "aa@gmail.com";
        private $address = "tphcm";


        public function getEmail(){
            return $this->email;
        }

        public function setAddress($Address){
            $this->address = $Address;
        }

        public function getAddress(){
            return $this->address;
        }
    }

    $students = new Student();
    echo $students->name;
    echo "</br>" . $students->getEmail();
    echo "</br>" . $students->getAddress();
