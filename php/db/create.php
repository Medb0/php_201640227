<?php

include 'dbconf.php';
require 'database.php';
require 'table.php';

// 순서가 틀릴경우를 대비한 연상배열
$config = [
  "host"=>$host,
  "user"=>$user,
  "password"=>$password,
  "database"=>$database];
$db= new Database($config);

/*
// 테이블 객체를 생성해서 연결
$db->setTable(new Table);
// 연결된 객체를 읽어옴.
$db->getTable()->createTable();
*/
// 메소드체인 기법을 활용한 방법
//$db->setTable(new Table($db))->getTable()->createTable();
$db->getTable()->createTable("members3",
  [
    'Last'=>"varchar(50)",
    'First'=>"varchar(50)",
    'Age'=>"varchar(50)"
  ]
);

if ($db->isTable("members")) {
  echo "테이블이 존재합니다.<br>";
}else {
  echo "테이블이 존재하지 않습니다.<br>";
}
