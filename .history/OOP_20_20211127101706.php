<?php

class Person
{
    public function sayHello()
    {
        echo 'Hello!';
    }
}

trait RollUp
{
    public function sayHello()
    {
        echo 'Hi!';
    }
}

class Student extends Person
{
    use RollUp;
}

$student = new Student();
$student->sayHello();

trait Admin
{
    public function login()
    {
        echo 'Login for Admin';
    }
}

trait Member
{
    public function login()
    {
        echo 'Login for Member';
    }
}

class Client
{
    use Admin, Member {
        Member::login insteadof Admin; // Sử dụng phương thức login ở trait Member thay cho Admin
    }
}

$client = new Client();
$client->login();

trait User
{
    public function login()
    {
        echo 'Login Success!';
    }
}

// Thay đổi phạm vi sử dụng của phương thức login
class Client
{
    use User {
        login as protected;
    }
}
