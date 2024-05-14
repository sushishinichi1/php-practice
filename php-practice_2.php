<?php
// Q1 tic-tac問題

for($x = 1; $x <= 100; $x++){
    if ($x % 4 === 0 and $x % 5 === 0) {
        echo "tictac\n";
    }elseif ($x % 5 === 0) {
        echo "tac\n";
    }elseif($x % 4 === 0){
        echo"tic\n";
    }else {
        echo $x . "\n";
    }
}


// Q2 多次元連想配列

//問題１
echo $personalInfos[1]['name'] ."の電話番号は" . $personalInfos[1]['tel'] . "です。";

//問題２

foreach ($personalInfos as $index => $info) {
  echo ($index + 1) . '番目の' . $info['name'] . 'のメールアドレスは' . $info['mail'] . 'で、電話番号は' . $info['tel'] . 'です。'. "\n";
}

//問題３

foreach ($personalInfos as $index => $info) {
  $personalInfos[$index]['age'] = $ageList[$index];
}

// Q3 オブジェクト-1

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($course)
    {
        // echo '授業に出席しました。';
        echo $this->studentName . 'は' . $course . 'の授業に参加しました。学籍番号：' . $this->studentId;
    }
}

$yamada = new Student(120, '山田');
echo '学籍番号' .yamada->studentId . '番の生徒は' . yamada->studentName . 'です。';


// Q4 オブジェクト-2
$tanaka = new Student(121, '田中');
$tanaka->attend('php');

// Q5 定義済みクラス
//問１
$last_month = new DateTime('-1 month');
echo $last_month->format('Y-m-d');

//問２

$today = new DateTime();


$targetDate = new DateTime("1992-04-25");


$interval = $today->diff($targetDate);

echo "あの日から" . $interval-> days . "日経過しました。";

?>