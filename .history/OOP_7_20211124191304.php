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

    $catA = new Anime();
    $catA->setName("cat A");
    // echo $catA->getName();

    $catB = $catA;
    $catB->setName("cat B");
    echo $catB->getName();
    echo $catA->getName();

