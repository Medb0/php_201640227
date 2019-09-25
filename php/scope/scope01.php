<?php

$a = 1;

echo "start = " . $a . "<br>";

function num()
{
  global $a;
  echo "num = " . $a . "<br>";

  $a = 6;
}

num();

echo "end = " . $a . "<br>";
