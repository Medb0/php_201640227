<?php

$files = scandir(".");

foreach($files as $f){
    if($f == "." || $f == "..") continue;
    echo "파일명 = ".$f."\n";
}