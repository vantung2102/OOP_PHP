<?php

    class Student{
        public static $name = "Student A";

        public function getName(){
            return self::$name;
        }
    }

    echo Student::$name;
    $student = new Student();
    echo "<br/>".$student->getName();
    echo "<br/>". Student::getName();
