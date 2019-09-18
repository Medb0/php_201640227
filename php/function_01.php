<?php

$name = "daelim";

// 선언
function hello()
{
    echo "welcome\n";
}

if(!function_exists("hello")){
    function hello()
    {
        echo "welcome";
    }
}else{
    echo "이미 있는 함수입니다.";
}

// 호출

hello();
hello();