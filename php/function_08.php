<?php

function hello(){
    echo "1. 안녕하세요<br>";
    yield "1";
    echo "2. 잘가<br>";
    yield "2";
    echo "3. 조만간 끝나<br>";
    yield "3";
    echo "4. 죽여줘..<br>";
}

hello();