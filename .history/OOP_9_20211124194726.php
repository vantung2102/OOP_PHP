<?php

    abstract class Car{
        abstract function banhXe();
        abstract function khungXe();
        abstract function phanhXe();
    }

    abstract class MobileCar extends Car{
        function banhXe(){

        };
        function khungXe(){

        };
        function phanhXe(){

        };

    }

    $XeMay = new MobileCar();