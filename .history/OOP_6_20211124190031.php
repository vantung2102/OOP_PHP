<?php

    class Anime{
        final public function sound(){
            echo "tiếng kêu";
        }
    }

    class Cat extends Anime{
        public function getSound(){
            echo "meo meo";
        }
    }

    $cat = new Cat();
    echo $cat->sound();
    echo $cat->getSound();