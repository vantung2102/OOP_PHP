<?php

    class Student{
        private $body = "AA";
        
        public function __construct(){
            echo "</br> this is construct";
        }

        public function getBody(){
            echo "</br> this is body";
        }

        public function __destruct(){
            echo "</br> this is destruct";
        }
    }

    $new = new Student();
    $new->getBody();