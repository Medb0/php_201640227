<?php

include 'dbconf.php';
require 'database.php';

// 순서가 틀릴경우를 대비한 연상배열
$config = [
  "host"=>$host,
  "user"=>$user,
  "password"=>$password,
  "database"=>$database];
$db = new Database($config);

$query = "SHOW TABLES";
$result = $db->queryExecute($query);
$count = mysqli_num_rows($result);

echo "테이블 개수는 ".$count."<br>";

for ($i=0; $i < $count ; $i++) {
  $row = mysqli_fetch_object($result);
  echo "테이블 = ".$row->Tables_in_php."<br>";
}

/*

// 테이블을 생성할때 사용할 변수
$query =
"create table `members` (
    `id` int(11) NOT NULL auto_increment,
    lastName varchar(255),
    FirstName varchar(255),
    PRIMARY KEY(`id`)
    ) ENGINE=innodb default charset=utf8;
  ";

if (mysqli_query($connect, $query)) {
  echo "테이블 생성 완료<br>";
}else {
  print "테이블 생성 실패";
}

// mysql 접속 해제
mysqli_close($connect);
*/
