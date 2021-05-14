<?php
/*
 Template Name :Sushiichi
*/
?>
 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta charset ="utf-8">
    <link rel ="stylesheet" href="<?php echo get_stylesheet_uri(style.css);?>" type="text/css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <title>Susiichi</title>

    <script>
      $(function(){
          $(".menu__icon").on("click",function(){
              $("#menu__content__list").addClass("active");
              $("#main").css("opacity","0.3");
              });
          $("#close__btn").on("click",function(){
              $("#menu__content__list").removeClass("active");
              $("#main").css("opacity","1");
              });
          var flag = true;
          $(window).on("scroll",function(){
              $(".menu__image__left").each(function(index, el){
              if($(window).scrollTop()> $('#about__page').offset().top *0.5 && flag == true ){
              flag = false;
              console.log($(window).width());
                   if ($(window).width() < 500) {
                   $(".menu__image__left").css("z-index","100");
                   $(".menu__image__left").css("position","absolute");
                   $(".menu__image__left").fadeIn(500);
                   $(".menu__image__left").animate({"bottom":"-65px","left":"80px","width":"83%"});
                   $(el).addClass("active");
                   } else {
                   $(el).addClass("active");
                   }
                 }
              });
          });

          $(window).on("scroll",function(){
              $(".contact__image__right").each(function(index, el){
                if($(window).scrollTop()> ($(el).offset().top - $(window).height() / 2 ) ){
                  $(el).addClass("over_st");
                }
              });
         });
    });

  </script>
 </head>
   <div id="wrapper">
    <header>
      <div id="header__content">
        <div class="header__top">
          <div class="header__top__left">
            <h1><a href="/index.php?page_id=30">鮨いち</a></h1>
              <div class="menu__content">
                <h3 class="menu__icon"><div></div><div></div><div></div></h3>
                 <ul id="menu__content__list">
                  <li><a href="/index.php?page_id=30">トップ</a></li>
                  <li><a href="/?page_id=39">創作</a></li>
                  <li><a href="sinagaki.php">お品書き</a></li>
                  <li><a href="form.php">アクセス</a></li>
                  <li><a href="form.php">お問い合わせ</a></li>
                 <div id="close__btn">
                  <p>閉じる</p>
                 </div>
                </ul>
              </div>
          </div>

          <div class="header__top__right">
            <ul>
              <li class="top__name"><a href="/index.php?page_id=30">トップ</a></li>
              <li><a href="/?page_id=39">創作</a></li>
              <li><a href="sinagaki.php">お品書き</a></li>
              <li><a href="form.php">アクセス</a></li>
              <li><a href="form.php">お問い合わせ</a></li>
            </ul>
          </div>
        </div>

        <div class="header__bottom">
          <div class="header__bottom__left">
            <p>あたたかいおもてなしをモットーに<br>
              魚それぞれの良さを活かした鮓を握っています</p>
            <b>@東中野xx年</b>
          </div>
          <div class="header__bottom__right">
            <div class="header__image"></div>
          </div>

        </div>
      </div>
     </header>
