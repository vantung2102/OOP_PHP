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

    class Cat extends Anime{
        public function head(){

        }
        public function eye(){

        }
    }

    class Bird extends Anime{
        public function head(){

        }
        public function eye(){

        }
    }