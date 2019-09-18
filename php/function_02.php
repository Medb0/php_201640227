<?php

//함수 선언시 변수로 값을 받을 수 있다.
function hello($name="___ ", int $a , int $b):int
{
    $sum = $a + $b;
    echo "welcome ".$name . " = " . $sum . "<br>";

    return $sum;
}

//호출
$user = "kim ";
$func = hello("1+2" , 1 , 2);

hello("Lee",1,2);
hello($user);