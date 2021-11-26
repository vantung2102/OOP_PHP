<?php

    class Anime{
        private $name;

        public function setName($name){
            $this->name = $name;
        }

        public function getName($name){
            return $this->name; 
        }
    }

    class Cat extends Anime{
        public function getSound(){
            echo "meo meo";
        }
    }