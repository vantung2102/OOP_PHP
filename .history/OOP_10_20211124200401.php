<?php

    interface Swim{
        public function canSwim();
    }

    interface Fly{
        public function canSky();
    }

    interface Run{
        public function canRun();
    }

    abstract class Anime{
        abstract public function head();
        abstract public function eye();

    }

    class Cat extends Anime implements Run,Swim{
        public function head(){
            return __METHOD__;
        }
        public function eye(){

        }
        public function canSwim();
        public function canRun();

    }

    class Bird extends Anime{
        public function head(){
            return __METHOD__;
        }
        public function eye(){

        }
    }