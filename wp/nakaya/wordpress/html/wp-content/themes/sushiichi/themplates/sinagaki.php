<?php
/*
* Template Name: 品書き
*/
?>
<!doctype html>
<html>

 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/static/css/reset.css" media="all" type="text/css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/static/css/sinagaki.css" media="all" type="text/css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>                  
  <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/static/js/slick/slick/slick.min.js"></script>
  <link href="<?php echo get_stylesheet_directory_uri();?>/static/js/slick/slick/slick-theme.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_stylesheet_directory_uri();?>/static/js/slick/slick/slick.css" rel="stylesheet" type="text/css">
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
    $(".main__menu__image").slick({
      autoplay:true,
      autoplaySpeed:2000,
      dots:true,
      arrows:true,
   });
});

  </script>
<style>
footer #footer__fild .footer__image{
  background-image: url(<?= get_field('img_1')['url']; ?>);
 }
</style>
 </head>

<body>
 <div id="wrapper">
  <header>
   <div id="header__screen">
    <div id="header__image">
     <div class="header__bar">
        <div class="header__bar__left">
          <h1><a href="/鮨いちのトップページ">鮨いち</a></h1>
        </div>

      <div class="header__bar__right">
       <ul>
        <li class="top__name"><a href="/鮨いちのトップページ">トップ</a></li>
        <li><a href="/創作のページ">創作</a></li>
        <li><a href="/品書きページ">お品書き</a></li>
        <li><a href="/フォームのページ">アクセス</a></li>
        <li><a href="/フォームのページ">お問合せ</a></li>
       </ul>
      </div>

        <div class="hidden__menu">
	 <h2 id="menu__name"><div></div><div></div><div></div></h2>
	 　<ul id="menu__lists">
	    <li><a href="/鮨いちのトップページ">トップ</a></li>
	    <li><a href="/創作のページ">創作</a></li>
	    <li><a href="/品書きページ">お品書き</a></li>
	    <li><a href="/フォームのページ">お問い合わせ</a></li>
	    <li><a href="/フォームのページ">アクセス</a></li>
	    <div id="close__btn">
              <p>閉じる</p>
            </div>
	   </ul>
	</div>

      </div>

      <div class="header__title">
        <h1>お品書き</h1>
      </div>

    </div>
   </div>
  </header>

  <div id="main">

    <div id="about__menu">
       <div class="about__menu__left">
        <h2>GREETING</h2>
	<h3>味に惹かれる逸品を</h3>
	<p></p>
       </div>

       <div class="about__menu__right">
        <h3>寿司の美味しさを一番に感じられるのは、握りたてであると考えております。</h3>
        <p>カウンター越しに一貫ずつご提供する寿司を堪能する贅沢さを、臨場感とともにお楽しみ下さい。<br>
        魚についての小話などをしながら、ゆったりとすごしていただけましたら幸いです。<br>
        落ち着きの空間で心を尽くしたおもてなしに身を委ねる、格別なひと時を。</p>
	<div class="about__btn"><a href="/品書きページ">ABOUT US</a></div>
       </div>
    </div>

    <div id="main__menu">
      <div class="main__menu__top">
        <div class="main__menu__image"><img src="<?=get_template_directory_uri();?>/static/images/susi12.jpg"><img src="<?=get_template_directory_uri();?>/static/images/sina.jpg"><img src="<?=get_template_directory_uri();?>/static/images/susi6.jpg"><img src="<?=get_template_directory_uri();?>/static/images/susi18.jpg"></div>
      </div>

      <div class="main__menu__text">
        <div class="main__menu__left">
          <h2>GRAND MENU</h2>
	  <h3>季節に合わせた逸品を</h3>
	  <h3>握りたてを味わう至福の一時</h3>
	  <p></p>
        </div>

       <?php if(have_posts()):while(have_posts()): the_post();?>
       <?php the_content(); ?>
       <?php endwhile; endif; ?>
      </div>
    </div>

  <div id="susi__menu">
    <h1>寿司</h1>
     <div class="main__susi__menu">
       <ul>
        <li><span><img src="<?=get_template_directory_uri();?>/static/images/Image7.png"></span><p>おすすめ３種の握り</p></li>
        <li><span><img src="<?=get_template_directory_uri();?>/static/images/susi13.jpg"></span><p>大穴子の握り</p></li>
        <li><span><img src="<?=get_template_directory_uri();?>/static/images/susichi5.jpg"></span><p>中トロ握り</p></li>
        <li><span><img src="<?=get_template_directory_uri();?>/static/images/Image1.jpg"></span><p>ミル貝握り</p></li>
        <li><span><img src="<?=get_template_directory_uri();?>/static/images/Image.jpg"></span><p>車海老の握り</p></li>
        <li><span><img src="<?=get_template_directory_uri();?>/static/images/Image3.jpg"></span><p>〆さばの握り</p></li>
        <li><span><img src="<?=get_template_directory_uri();?>/static/images/Image2.jpg"></span><p>真蛸の握り</p></li>
        <li><span><img src="<?=get_template_directory_uri();?>/static/images/Image6.jpg"></span><p>こはだの握り</p></li>
       </ul>	
      </div>
  </div>

  <div id="main__sousaku__menu">
     <h1>創作</h1>
    <div class="sousaku__menu">
       <ul>
        <li><span><img src="<?=get_template_directory_uri();?>/static/images/sou4.jpg"></span><p>やんごとなき雲丹</p></li>
        <li><span><img src="<?=get_template_directory_uri();?>/static/images/sou8.jpg"></span><p>雲丹いくら盛り</p></li>
        <li><span><img src="<?=get_template_directory_uri();?>/static/images/sou9.jpg"></span><p>季節の逸品</p></li>
       </ul>
     <div class="sousaku__btn"><a href="/創作のページ">創作</a></div>
    </div>
  </div>

   <div class="main__sopu__menu">
      <h1>汁物</h1>
     <div class="sopu__menu">
        <ul>
	  <li><span><img src="<?=get_template_directory_uri();?>/static/images/sina1.jpg"></span><p>お吸い物</p></li>
	  <li><span><img src="<?=get_template_directory_uri();?>/static/images/sina2.jpg"></span><p>旬野菜の吸い物</p></li>
	  <li><span><img src="<?=get_template_directory_uri();?>/static/images/sina4.jpg"></span><p>高野豆腐の吸い物</p></li>
	</ul> 
     </div>
    </div>

    <div id="main__alco__menu">
       <h1>お酒</h1>
      <div class="alco__menu">
        <ul>
	  <li><span><img src="<?=get_template_directory_uri();?>/static/images/sake2.jpg"></span><p>日本酒各種</p></li>
	  <li><span><img src="<?=get_template_directory_uri();?>/static/images/sake1.jpg"></span><p>やすらぎの一時</p></li>
	  <li><span><img src="<?=get_template_directory_uri();?>/static/images/sake4.jpg"></span><p>至福の一時</p></li>
	</ul>
      </div>
     </div>

 </div>

  <footer>
   <div id="footer__fild">
    <div class="footer__image"></div>
    <div class="footer__top"></div>

    <div class="footer__bottom">
     <div class="footer__kuuhaku"></div>
      <div class="footer__text">
        <p>「魚それぞれの魅力を活かし切る方法」を追求し続けております。<br>
	     握りたてを味わう至福の一時を。</p>
      </div>

     <div id="footer__bar">
       <ul>
         <li class="store__name"><a href="/鮨いちのトップページ"><?= get_field("footer_title") ?></a></li>
         <li><a href="/鮨いちのトップページ">トップ</a></li>
         <li><a href="/品書きページ">お品書き</a></li>
	 <li><a href="/創作のページ">創作</a></li>
         <li><a href="/フォームのページ">店舗情報</a></li>
       </ul>
     </div>

   </div>

  </footer>
 </div>
</body>
</html>
