<?php

$code = "en";
$code();
// switch($code){
//     case "ko":
//         ko();
//         break;
//     case "en":
//         en();
//         break;
//     case "ja":
//         ja();
//         break;
//     case "zh":
//         zh();
//         break;
// }

function ko(){
    echo "한국어";
}
function en(){
    echo "영어";
}
function ja(){
    echo "일본어";
}
function zh(){
    echo "중국어";
}