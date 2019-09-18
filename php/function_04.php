<?php

//함수 선언시 변수로 값을 받을 수 있다.
function korean()
{
    echo "안녕하세요.";
}

function english()
{
    echo "hello.";
}

$lang = "en";
if($lang == "ko")
    $fff = "korean";
else
    $fff = "english";

$fff();