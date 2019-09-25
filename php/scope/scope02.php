<?php

$a = 1;

echo "start = " . $a . "<br>";

function num()
{

  echo "num = " . $GLOBALS['a'] . "<br>";

  $GLOBALS['a'] = 6;
}

num();

echo "end = " . $a . "<br>";

echo $_SERVER['REQUEST_URI'];
