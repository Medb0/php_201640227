<?php

include 'autoload.php';

$obj1 = new left;
var_dump($obj1);
$obj1->greeting();
$obj1->dealim();
$property = "name";
echo $obj1->name . "입니다.<br>";
echo $obj1->$property . "입니다.<br>";
echo "영어 코드는 ". $obj1::ENGLISH ."<br>";
echo "<br>";


$obj2 = new right;
$obj2->name = "대숙이";
$result = $obj2->greeting();
var_dump($result);
echo "<br>";

$obj2->daelim();
$result->daelim();

// 메소드 체인
echo "<br>-------------------------------------<br>";
$obj2->greeting()->daelim()->foo()->bar();

echo "<br>-------------------------------------<br>";
echo foo::$aaa;
echo foo::hello();
