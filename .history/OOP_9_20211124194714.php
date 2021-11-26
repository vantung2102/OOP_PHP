<?php

    abstract class Car{
        abstract function banhXe();
        abstract function khungXe();
        abstract function phanhXe();
    }

    abstract class MobileCar extends Car{
        public function banhXe(){

        };
        public function khungXe(){

        };
        public function phanhXe(){

        };

    }

    $XeMay = new MobileCar();