<?php
// Q1 変数と文字列
$name = '高橋';
echo '私の名前は「' . $name . '」です。';

// Q2 四則演算
$num = 5 * 4;
echo $num . "\n" . $num / 2;

// Q3 日付操作

$date = date("Y年m月d日 H時i分s秒");
echo '現在時刻は,' . $date . 'です。';

// Q4 条件分岐-1 if文
$device ="windows";
if ($device === "windows" or $device === "mac") {
  echo("使用OSは、" . $device . "です。");
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

foreach($kanto_prefectures as $prefecture => $city) {
    if ($city === $target_prefecture) {
        echo $prefecture . "の県庁所在地は、" . $city . "です。";
        break;
    }
}

// Q9 連想配列-3

$kanto_prefectures["愛知県"] = "名古屋市";
$kanto_prefectures["大阪府"] = "大阪市";


foreach ($kanto_prefectures as $prefecture => $capital) {
  if (
    $capital === "新宿区" ||
    $capital === "横浜市" ||
    $capital === "さいたま市" ||
    $capital === "千葉市" ||
    $capital === "宇都宮市" ||
    $capital === "水戸市" ||
    $capital === "前橋市"
  ) {
      echo $prefecture . "の県庁所在地は、" . $capital . "です。\n";
  } else {
      echo $prefecture . "は関東地方ではありません。\n";
  }
}
// Q10 関数-1
function hello($name)
{
    return  $name . "さん、こんにちは。\n";
}
echo hello('金谷');
echo hello('安藤');

// Q11 関数-2
function calcTaxInPrice($taxOutPrice)
{
  return $taxOutPrice * 1.1;
}
$price = 1000;
$taxInPrice = calcTaxInPrice($price);
echo $price . "円の商品の税込価格は" . $taxInPrice . "円です。";;

// Q12 関数とif文
function distinguishNum($num)
{
    if ($num%2 == 0) {
        return $num . "は偶数です。";
    }else {
        return $num . "は奇数です。";
    }
}

echo distinguishNum(9);
echo distinguishNum(1001);

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

