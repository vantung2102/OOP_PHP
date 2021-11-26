<?php

class Student
{
    private $name;
    private $phone;

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getPhone()
    {
        return $this->phone;
    }

    public function __set($key, $value)
    {
        if ($key == 'name') {
            $this->name = $value;
        } else {
            $this->phone = $value;
        }
    }

    public function __get($key)
    {
        if ($key == 'name') {
            return $this->name;
        } else {
            return $this->phone;
        }
    }
}