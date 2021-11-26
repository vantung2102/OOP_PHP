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