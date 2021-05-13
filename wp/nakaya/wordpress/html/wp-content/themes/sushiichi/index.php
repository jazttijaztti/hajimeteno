<?php
/*
* Template Name: Sushiichi
*/
?>
<!Doctype html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <meta charset ="utf-8">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(style.css); ?>" media="all">
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

<body>
  <div id="wrapper">
  <header>
   <?php get_header(); ?>
  </header>
    <div id="main">
      <div id="about__page">
        <div class="about__title">
          <h3>ABOUT</h3>
          <h2>握りたてを味わう至福の一時を</h2>
        </div>

        <div class="about__text">
          　　<h3>寿司の美味しさを一番に感じられるのは、握りたてであると考えております。</h3>

          <p>カウンター越しに一貫ずつご提供する寿司を堪能する贅沢さを、<br>臨場感とともにお楽しみください。<br>
            落ち着きの空間で心を尽くしたおもてなしに身を委ねる、格別なひと時を。</p>

          <div class="about__btn">
            <b><a href="sinagaki.php">ABOUT US</a></b>
          </div>
        </div>

      </div>

      <div id="menu__page">
       
       <div class="menu__images">
          <div class="menu__image__left"></div>

          <div class="menu__image__right">
            <div class="image__right__content"></div>
          </div>
	  
        </div>

        <div class="menu__text">
          <div class="menu__text__left">
            <h3>MENU</h3>
            <h2>素材の可能性を広げる</h2>
          </div>

          <div class="menu__text__right">
            　<h3>素材の鮮度・調理法へのこだわり</h3>
            <p>素材の温度管理や鮮度を保つための工夫に加えて、<br>
              素材の良さを活かした方法で調理致します。<br>
              素材そのものの美味しさを実感して下さい。</p>  
            <div class="about__btn">
              <b><a href="sousaku.php">ABOUT US</a></b>
            </div>
          </div>
        </div>

      </div>

      <div id="contact__page">
        <div class="contact__images">
          <div class="contact__image__left">
            <div class="contact__image__content"></div>
          </div>
          <div class="contact__image__right">
          </div>
        </div>

        <div class="contact__box">
          <div class="contact__box__content">
            <div class="contact__text">
              <h3>CONTACT</h3>
              　  <h2>鮨いち</h2>
            </div>

            <div class="contact__lists">
              <div class="contact__adress">
                <p>ADRESS</p>
              </div>

              <div class="contact__content">
                <p>〒164-0003</p>
                <p>東京都中野区３丁目9-9</p>
              </div>

           </div>

            <div class="contact__phone">
              <div class="contact__tel">
                <p>TEL</p>
              </div>
              <div class="contact__number">
                <p>03-3364-4801</p>
              </div>

              <div class="info__box">
                <b><a href="form.php">MORE INFO</a></b>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div id="creation__page">
        <div class="creation__image"></div>

        <div class="creation__text">
          <div class="creation__text__box">
            <h3>創作寿司</h3>
            <p>食材一つひとつに合わせて、変化させる仕込み。</p>
            <p> 素材を感じる。</p>

            <div class="creation__btn">
              <b><a href="sousaku.php">MENU</a></b>
            </div>

          </div>
        </div>
      </div>
    </div>

    <footer>
     <?php get_footer(); ?>
    </footer>　　
  </div>

</body>
</html>
