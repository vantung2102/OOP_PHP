<?php

    class Person{
        public $name = "Lê A";
        protected $phone = "099999";
    }

    class Student extends Person{
        protected $phone = "088888";

        public function getPhone(){
            return $this->phone;
        }
    }

    $student = new Student();
    
    echo $student->name;
    echo $student->getPhone();