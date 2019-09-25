<?php
/**
 *변수와 함수를 묶어서 캡슐화를 시킨다.
 *함수 = 메소드
 *변수 = 프로퍼티
 */
class left
{
  public $name;
  const ENGLISH = "en";
  public function greeting()
  {
    echo "left hello<br>";
  }

  public function dealim()
  {
    echo "대림대학교";
  }
}
