<?php
spl_autoload_register(function($className){
  // echo "class : ". $className . "<br>" ;
  $filename = $className.".php";
  // echo "file : " .$filename . "<br>";
  if(file_exists($filename)){
    require $filename;
  }

});
