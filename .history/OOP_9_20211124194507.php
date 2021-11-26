<?php

    abstract class Car{
        abstract public function banhXe();
        abstract public function khungXe();
        abstract public function phanhXe();

    }

    abstract class MobileCar extends Car{
        abstract public function banhXe();
        abstract public function khungXe();
        abstract public function phanhXe();

    }

    $XeMay = new MobileCar();