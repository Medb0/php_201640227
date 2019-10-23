<?php
include "Test.php";
$obj = Test::make();
$obj1 = Test::make();
$obj2 = Test::make();

$obj->factory("Table");

$obj1->strage("칼");
$obj1->strage("총");
