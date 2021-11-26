<?php

    class Person{
        public $name = "Lê A";
        protected $phone = "099999";

        public function getMessage(){
            echo "</br>" . "this is person ". __METHOD__; 
        }
    }

    class Student extends Person{
        protected $phone = "088888";

        public function getPhone(){
            return $this->phone;
        }

        public function getMessage(){
            parent::getMessage();
            echo "</br>" . "this is student ". __METHOD__; 
        }
    }

    $student = new Student();
    
    echo "</br>" . $student->name;
    echo "</br>" . $student->getPhone();
    echo "</br>" . $student->getMessage();