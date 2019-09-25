<?php

class right
{
  public $name;
  public function greeting()
  {
    echo "right hello : ". $this->name ."<br>";
    return $this;
  }

  public function daelim()
  {
    echo "대림대학교<br>";
    return $this;
  }

  public function foo()
  {
    echo "u stupit";
    return $this;
  }
  public function bar()
  {
    echo "m8 :D";
  }

}
