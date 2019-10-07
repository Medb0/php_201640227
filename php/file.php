<?php
echo "파일 목록을 출력합니다.";
$path = "./";
files($path);

function files($path)
{
  $files = scandir($path); // 경로에 값을 배열로 반환하는 함수
  // print_r($files);
  for($i=0;$i<count($files);$i++){
    if($files[$i] == ".git" || $files[$i] == "..") continue;
    if(is_dir($files[$i])){ // 파일이 디렉토리이면..
      echo "<b>".$files[$i]."</b><br>";
      // files($path.$files[$i]);
    }else{
      echo $files[$i]."<br>";
    }
  }
}
