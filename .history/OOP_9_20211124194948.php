<?php

    abstract class Car{
        abstract public function banhXe();
        abstract public function khungXe();
        abstract public function phanhXe();
    }

    class MobileCar extends Car{
        public function banhXe(){
            return __METHOD__;
        }
        public function khungXe(){
            return __METHOD__;
        }
        public function phanhXe(){
            return __METHOD__;
        }

    }

    $XeMay = new MobileCar();
    $XeMay->banhXe();