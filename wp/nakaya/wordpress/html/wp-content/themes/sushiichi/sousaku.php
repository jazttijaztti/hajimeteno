<?php 
/*
* Template Name: Sushiichi
*/
?>

<!doctype html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
 <meta charset ="utf-8">
 <?php if(is_single()):?>
 <link rel="stylesheet" href="<?php top('http://127.0.0.1:8080/?page_id=30');?>/css/style.css" type="text/css">
 <?php else: ?>
 <link rel"stylesheet" href="<?php sousaku('http://127.0.0.1:8080/?page_id=39');?>/css/sousaku.css" type="text/css">
 <?php endif; ?>
 <link href="slick/slick/slick-theme.css" rel="stylesheet" type="text/css">
 <link href="slick/slick/slick.css" rel="stylesheet" type="text/css">
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>                  
 <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
 <script type="text/javascript" src="slick/slick/slick.min.js"></script>

<script>

 $(function(){
      $("#menu__name").on("click",function(){
      $("#menu__lists").addClass("active");
      $("#main").css("opacity","0.3");    
 });
      $("#close__btn").on("click",function(){
      $("#menu__lists").removeClass("active");
      $("#main").css("opacity","1");       
   });
 });

$(function(){
  $(".main__image").slick({
    autoplay:true,
    autoplaySpeed:2000,
    dots:true,
    arrows:true,
   });

});

</script>
</head>

<body>
<div id="wrapper">
 <header>
  <div id="header__screen">
   <div id="header__image">
        
      <div class="header__bar">
         <div class="header__bar__left">
           <h1><a href="index.html">鮨いち</a></h1>
         </div>
         <div class="header__bar__right">
          <ul>
            <li class="top__name"><a href="index.php?page_id=30">トップ</a></li>
            <li><a href="sousaku.php?page_id=39">創作</a></li>
            <li><a href="sinagaki.html">お品書き</a></li>
            <li><a href="form.html">アクセス</a></li>
            <li><a href="form.html">お問い合わせ</a></li>
          </ul>
         </div>

         <div class="hidden__menu">
          <h2 id="menu__name"><div></div><div></div><div></div></h2>
        　  <ul id="menu__lists">
              <li><a href="index.php?page_id=30">トップ</a></li>
              <li><a href="sousaku.php?page_id=39">創作</a></li>
              <li><a href="sinagaki.php">お品書き</a></li>
              <li><a href="form.php">お問い合わせ</a></li>
              <li><a href="form.php">アクセス</a></li>
             <div id="close__btn">
               <p>閉じる</p>
             </div>
            </ul>
         </div>

      </div>
    
    <div class="header__title">
     <h1>創作<h1>
    </div>

   </div>
  </div>
  
  <div id="header__text">

    <div class="header__text__left">
      <h3>「魚それぞれの魅力を活かしきる方法」を追求しています。 </h3>
　　　<p>カウンター越しに一貫ずつご提供する寿司を堪能する贅沢さを、臨場感とともにお楽しみください。<br>
         魚についての小話などしながら、ゆったりと過ごしていただけましたら幸いです。<br>
         落ち着きの空間で心を尽くしたおもてなしに身を委ねる、格別なひと時を。</p>
    </div>

    <div class="header__text__right">
     <div class="header__text__right__image"></div>
    </div>

  </div>
 </header>

 <main>
  <div id="main__screen">

   <div class="main__image"><img src="image/susi12.jpg"><img src="image/susi16.jpg"><img src="image/susi6.jpg"><img src="image/susichi1.jpg"><img src="image/susichi3.jpg"></div>

   <div class="main__content">
    <ul>
     <li><span><img src="image/sou2.jpg"></span><p class="name">やんごとなきうに</p><p>雲丹を3倍に盛り付けトリュフ塩かけて完成</p></li>
     <li><span><img src="image/sou3.jpg"></span><p class="name">手間鳥賊</p><p>包丁を50回入れてイカを柔らかくする</p></li>
     <li><span><img src="image/sushiichi02.jpg"><p class="name">海庭</p><p>軍艦3種(干鵜巻と鉄火とネギトロの軍艦にいくらをまぶすオイスターリーフをのせて)</p></span></li>
     <li><span><img src="image/sou5.jpg"></span><p class="name">穴重</p><p>しゃりを四角くして穴子二つ重ねて小さな鰻重に一口サイズの穴子重</p></li>
     <li><span><img src="image/sou6.jpg"></span><p class="name">やんごとなきうに</p><p>雲丹を3倍に盛り付け<br>トリュフ塩かけて完成</p></li>
     <li><span><img src="image/sou7.jpg"></span><p class="name">手間鳥賊</p><p>包丁を50回入れてイカを柔らかくする</p></li>
     <li><span><img src="image/sou8.jpg"></span><p class="name">海庭</p><p>軍艦3種(干鵜巻きと鉄火とネギトロ軍艦にいくらをまぶしてオイスターリーフを乗せる)</p></li>
     <li><span><img src="image/sou9.jpg"></span><p class="name">穴重</p><p>しゃりを四角くして穴子二つ重ねて小さな鰻重に一口サイズの穴子重</p></li>
    </ul>
   </div>
  </div>
 </main>

 <footer>
  <div id="footer__fild">
     <div class="footer__image"></div>

     <div class="footer__top"></div>

  <div class="footer__bottom">
       <div class="footer__kuuhaku"></div>
       <div class="footer__text">
         <p>「魚それぞれの魅力を活かしきる方法」を追求し続けております。<br>握りたてを味わう至福の一時を。</p>
       </div>

    <div id="footer__bar">
      <ul>
       <li class="store__name"><a href="index.html">鮨いち</a></li>
       <li><a href="index.html">トップ</a></li>
       <li><a href="sinagaki.html">お品書き</a></li>
       <li><a href="sousaku.html">創作</a></li>
       <li><a href="form.html">店舗情報</a></li>
      </ul>
     </div>

  </div>

 </div>
</footer>
</div>

</body>

</html>
