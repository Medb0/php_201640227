<?php

/**
*
*/
class daelim
{
  public function __construct()   //생성자
  {
    echo __CLASS__ . "이 생성되었습니다.<br>";
  }

  final public function hello()
  {
    echo "학교가 너무 높다..";
  }
}

class food extends daelim{
  public function menu()
  {
    echo "맛없엉..";
  }
  // public function hello(){
  //   echo "학교가 너무 멀어요..";
  // }
}
$obj1 = new food;

$obj1->hello();
$obj1->menu();
?>
