<?php
/*
* Template Name: thankspage
*/
?>
<!doctype html>
<html>

 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/static/css/reset.css" media="all" type="text/css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/static/css/thanks.css" media="all" type="text/css">
  <link href="<?php echo get_stylesheet_directory_uri();?>/static/js/slick/slick/slick-theme.css" rel="stylesheet" type="text/css">
  <link href="<?php echo get_stylesheet_directory_uri();?>/static/js/slick/slick/slick.css" rel="stylesheet" type="text/css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>                  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3/dist/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/static/js/slick/slick/slick.min.js"></script>

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
        <li class="top__name"><a href="/鮨いちのトップページ">トップページに戻る</a></li>
        <li><a href="/フォームのページ">お問い合わせ</a></li>
       </ul>
      </div>

        <div class="hidden__menu">
	 <h2 id="menu__name"><div></div><div></div><div></div></h2>
	 　<ul id="menu__lists">
	    <li><a href="/鮨いちのトップページ">トップページに戻る</a></li>
	    <li><a href="/フォームのページ">お問い合わせ</a></li>
	    <div id="close__btn">
              <p>閉じる</p>
            </div>
	   </ul>
	</div>

      </div>

      <div class="header__title">
        <h1>お問い合わせありがとうございます。</h1>
         <p>返信までしばらくお待ち下さい。</p>
      </div>

    </div>
   </div>
  </header>
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
         <li class="store__name"><a href="/鮨いちのトップページ">鮨いち</a></li>
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

