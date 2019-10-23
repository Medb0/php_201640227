<?php
// 선언 -> 생성 -> 호출

// Database 클래스 선언
class Database
{
  public $connect;

  // 생성자 메소드
  public function __construct($config)
  {
    echo "클래스 생성";

    // mysqli 객체 생성
    $this->connect = new mysqli($config['host'], $config['user'], $config['password'], $config['database']);

    //connect_errno = 0 or 1 == NoErr or Err
    if (!$this->connect->connect_errno) {
      echo "DB 접속 성공<br>";
    }else {
      echo "DB 접속 실패<br>";
    }

  }

  public function queryExecute($query)
  {
    // 전역변수는 $this->를 붙여주고
    // 지역변수는 $만 붙여준다.
    if ($result = mysqli_query($this->connect, $query)) {
      echo "쿼리 실행 완료<br>";
    }else {
      print "쿼리 실행 실패";
    }

    return $result;
  }
}
