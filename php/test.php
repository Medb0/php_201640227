<?php

  $abc = 123;
  $name = "abc";
  $nick = &$($name);

  if($name === $nick){
    echo "true";
  }else {
    echo "false";
  }
  echo $nick;
