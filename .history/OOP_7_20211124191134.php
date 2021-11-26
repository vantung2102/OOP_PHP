<?php

    class Anime{
        private $name;

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name; 
        }
    }

    class Cat extends Anime{
        public function getSound(){
            echo "meo meo";
        }
    }

    $cat = new Anime();
    $cat->setName("cat");
    echo $cat->getName();