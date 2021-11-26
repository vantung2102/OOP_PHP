<?php

    class Student{
        public static $name = "Student A";

        public static function getName(){
            return self::$name . __METHOD__;
        }
    }

    echo Student::$name;
    $student = new Student();
    // echo "<br/>".$student->getName();
    echo "<br/>". Student::getName();
