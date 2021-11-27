<?php

class Student
{
    //$method là tên của phương thức đang gọi
    //$params là danh sách các tham số truyền vào của phương thức đó
    public function __call($method, $params)
    {
        echo 'Tên phương thức: ' . $method . '<br/>';
        echo '<pre>';
        print_r($params);
    }
    // tương tụ với __callStatic
    // chủ yếu để fix lỗi
}

$student = new Student();
$student->getName("name");