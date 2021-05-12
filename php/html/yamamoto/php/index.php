<?php

$url = "https://yahoo.co.jp";
$res = get_title($url);

echo "aa";


?>

  タイトルは<?= $res ?>



<?php
 
$res = get_city_from_pref("miyagi");
echo "<pre>";
var_dump($res);

//---------------------------------------

function yamamoto($param) {
   $aa =  "タイトルは";
   $ret = $aa . get_title($param);
   
   return $ret;
   
}

function get_title($param){
     
  $src = file_get_contents($param);
  $kekka = explode("<title>" , $src);
  $kekka2 = end($kekka);

  $kekka3 = explode("</title>" , $kekka2);
  $title = reset($kekka3);
  return $title;
}

function get_city_from_pref($pref = "tokyo") {
   $prefs = get_cities();
   if(strpos($pref,',') !== false){
     $d_pref = explode(",", $pref);
     foreach ($d_pref as $key => $val) {
        $city[$val] = $prefs[$val];
     }
   } else {

        $city[$pref] = $prefs[$pref];
   }
   return $city;
}


function get_cities(){
  $pref["tokyo"][]="新宿"; 
  $pref["tokyo"][]="渋谷"; 
  $pref["tokyo"][]="池袋"; 
  $pref["miyagi"][]="石巻"; 
  $pref["miyagi"][]="仙台"; 
  $pref["miyagi"][]="伊達の牛タン市"; 
  return $pref;
}




exit;


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


$person['name']["namae"] = "yamamoto";
$person['tel']["bangou"] = "09042117564";
$person['tel']["nidaime"] = "090421175642";
$person['tel']["sandaime"] = "090421175643";
$person['address']["basyo"] = "新宿";
$person['hobby']["syumi"] = "お茶";


echo "------------------------<br>";

foreach($person as $key => $val) {
   echo $key."<br>";
   foreach($val as $key2 => $val2) {
     echo $key2."<br>";
     if ($val2 == "お茶") {
        echo "ごくごくごくごく";
     }
     echo $val2. "<br>";

   }
}

$pref['tokyo']["shinjuku"]["gurume"][] = "おはじき";
$pref['tokyo']["shinjuku"]["gurume"][] = "眞一館";
$pref['tokyo']["shinjuku"]["gurume"][] = "火鉢";
?>

はじめますよー

<?php foreach($pref as $key => $val) {  ?>
  <h2>都道府県</h2><p><?= $key ?></p>
  <?php foreach($val as $key2 => $val2) { ?>
  <h3><?= $key2 ?>の<?php
  foreach ($val2 as $key3 => $val3) { 
    echo $key3; ?></h3>

    <?php foreach ($val3 as $key4 => $val4) { ?>
<?php if ($key4 == 0) { echo "今日最初の紹介は.."; } ?>
    <p><?= $key4 ?>番目「<?= $val4 ?>」</p>
<?php   }
    }
  }  
} ?>



echo "------------------------<br>";






?>


  <h2>kanの曲名は？</h2>
  <p><?php echo $world['japan']['pref']['tokyo']['city']['rapper']['kan']['music']?></p>
  <h2>電話番号は</h2>
  <p><?php echo $tel;?></p>
  <h2>住所は？</h2>
  <p><?php echo $address;?></p>

