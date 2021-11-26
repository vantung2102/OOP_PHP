<?php

    class Student{
        private $body;

        public function __construct($body){
            echo "</br> this is construct";
            $this->body=$body;
        }

        public function getBody(){
            echo "</br> this is body";
            return $this->body;
        }

        public function __destruct(){
            echo "</br> this is destruct";
        }
    }

    $new = new Student("AS");
    $new->getBody();