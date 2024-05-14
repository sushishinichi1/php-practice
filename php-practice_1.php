<?php
// Q1 変数と文字列
$name = '高橋';
echo '私の名前は「'. $name . '」です。';

// Q2 四則演算
$num = 5 * 4;
echo $num . "\n" . $num / 2;

// Q3 日付操作

$date = date("Y年m月d日 H時i分s秒");
echo '現在時刻は,' . $date . 'です。';

// Q4 条件分岐-1 if文
$device ="windows";
if ($device == "windows") {
  echo("使用OSは、windowsです。");
}elseif ($device == "mac") {
  echo("使用OSは、macです。");
}else {
    echo("どちらでもありません。");
}


// Q5 条件分岐-2 三項演算子
$age = 23;
$message = ($age > 20) ? '成人です。' : '未成年です。';
echo $message;

// Q6 配列

$kanto_prefectures = array("東京都", "神奈川県",  "栃木県", "千葉県", "茨城県","埼玉県", "群馬県");
$third_prefecture = $kanto_prefectures[2];
$fourth_prefecture = $kanto_prefectures[3];

echo $third_prefecture . "と" . $fourth_prefecture . "は関東地方の都道府県です。";


// Q7 連想配列-1
$kanto_prefectures = array(
    "東京都" => "新宿区",
    "神奈川県" => "横浜市",
    "埼玉県" => "さいたま市",
    "千葉県" => "千葉市",
    "栃木県" => "宇都宮市",
    "茨城県" => "水戸市",
    "群馬県" => "前橋市"
);

foreach ($kanto_prefectures as $prefecture => $capital) {
    echo $capital . "\n";
}

// Q8 連想配列-2
$target_prefecture = "埼玉県";
$target_capital = $kanto_prefectures[$target_prefecture];
echo $target_prefecture . "の県庁所在地は、" . $target_capital . "です。";

// Q9 連想配列-3

$kanto_prefectures["愛知県"] = null;
$kanto_prefectures["大阪府"] = null;


foreach ($kanto_prefectures as $prefecture => $capital) {
  if ($capital !== null) {
      echo $prefecture . "の県庁所在地は、" . $capital . "です。\n";
  } else {
      echo $prefecture . "は関東地方ではありません。\n";
  }
}
// Q10 関数-1
function hello($name)
{
    echo  $name . "さん、こんにちは。\n";
}
hello('金谷');
hello('安藤');
// Q11 関数-2
function calcTaxInPrice($price)
{
  echo $price . "円の商品の税込価格は". $price * 1.1 ."円です。";
}

calcTaxInPrice(1000);

// Q12 関数とif文
function distinguishNum($num)
{
    if ($num%2 == 0) {
        echo $num . "は偶数です。";
    }else {
      echo $num . "は奇数です。";
    }
}

distinguishNum(9);


distinguishNum(1001);

// Q13 関数とswitch文
function evaluateGrade($grade) {
    switch ($grade) {
        case 'A':
        case 'B':
            return "合格です。";
        case 'C':
            return "合格ですが追加課題があります。";
        case 'D':
            return "不合格です。";
        default:
            return "判定不明です。講師に問い合わせてください。";
    }
}

$result1 = evaluateGrade('A');
echo $result1 . "\n";

$result2 = evaluateGrade('X');
echo $result2 . "\n";

