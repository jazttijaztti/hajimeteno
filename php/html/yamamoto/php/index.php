<?php

echo "something";
echo "<br><h1>でかい文字</h1>";

$address = "静岡";
$name = "山本";
$tel = "0900000";

echo $name;
echo $tel;
echo $address;

echo $name . "さんの電話番号は" . $tel . "で、住所は" . $address ."です";



$tokyo["city"]["rapper"]["kan"]["music"] = "ってことだよね？";
$tokyo["city"]["rapper"]["hanya"]["music"] = "般若";
$tokyo["city"]["rapper"]["muton"]["music"] = "muton-pv";
$tokyo["city"]["rapper"]["s-kine"]["music"] = "skine-pv";
$tokyo["city"]["rapper"]["sho"]["music"] = "sushi";
$tokyo["city"]["shinjuku"]["gurume"][] = "おはじき";
$tokyo["city"]["shinjuku"]["gurume"][] = "眞一館";
$tokyo["city"]["shinjuku"]["gurume"][] = "いけす";


echo $tokyo['city']['rapper']['kan']['music'];
echo $tokyo["city"]["shinjuku"]["gurume"][2];

echo $tokyo['city'];
echo $tokyo['restaurant'];

$world['japan']['pref']['aomori'] = "だべ";
$world['japan']['pref']['tokyo'] = $tokyo;

echo "<pre>";
var_dump($world);

/**
1. 変数    0
2. 配列    2
3. post get 1
4. foreach  4
5. phpのデフォルトの関数 1
6. 自作関数 4
7. オブジェクト指向 9
基礎終了
**/


?>


  <h2>kanの曲名は？</h2>
  <p><?php echo $world['japan']['pref']['tokyo']['city']['rapper']['kan']['music']?></p>
  <h2>電話番号は</h2>
  <p><?php echo $tel;?></p>
  <h2>住所は？</h2>
  <p><?php echo $address;?></p>

