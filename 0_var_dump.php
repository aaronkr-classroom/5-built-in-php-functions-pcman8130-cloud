<?php
$username = 'Ivy'; //스칼라 변수

$user_array1 = ['Ivy', 34, 'Web programming'];  //배열
$user_array2 = [   // 키/값 배열 
  'name' => 'Ivy',
  'age' => 34,
  'major' => 'Web programming',
];

class User { //객체
  public $name;
  public $age;
  public $major;
  public function __construct($name, $age, $major) {
    // => 정의 할 때 매개변수
    $this->name = $name;
    $this->age = $age;
    $this->major= $major;
  }
}
//=> 호출 할 때 인수  < 시험에 내실듯
$user_object = new User('Ivy', 34, 'Web programming');
?>
<p>Scalar: <?php var_dump($username); ?></p>
<p>Array1:  <?php var_dump($user_array1); ?></p>
<p>Array2: <?php var_dump($user_array2); ?></p>
<p>Object: <?php var_dump($user_object); ?></p>

