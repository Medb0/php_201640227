<?php
// 디자인 패턴 : 객체를 설계하는 형태를 말한다.
// 싱글턴 패턴
class Test
{

  private function __construct()
  {
    echo "테스트 객체<br>";
  }

  public static $instance = [];
  public static function make()
  {
    // 재사용 = 공유
    // 플라이웨이트 패턴

    // 플라이웨이트 패턴을 배열로 관리(다중공유)하는것을
    // 레지스터리 패턴, 컨테이너 ... 라고 표현한다.

    // 컨테이너는 객체를 만들어놓고(중복불가)
    // 배열에 나열하고 필요한걸 끌어다 쓰는것을 말한다.

    if(!self::$instance){
      self::$instance = new self();
    }

    return self::$instance;
  }

  // 팩토리패턴
  // 객체를 생성해주는 역할
  public function factory($name)
  {
    return new $name;
  }

  // 전략 패턴
  // 프로그램이 동작하는 중간에 객체를 변수로 넣어서 실시간으로 바꾸는 방법
  public function strage(object $algorism)
  {
    $this->A = $algorism;
  }
}
