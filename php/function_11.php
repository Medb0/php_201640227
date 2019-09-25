<?php


if(function_exists("daelim")){
  echo "함수명이 있습니다.<br>";
}else{
  function daelim($name, $num):array
  {
    echo "대림대학교<br>";

    $arr = [$name, $num];
    return $arr;
  }
}
