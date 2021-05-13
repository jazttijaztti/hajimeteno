 <?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Animals
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>	
	<?php
	//wp_body_open hook from WordPress 5.2
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	}else{
		do_action( 'wp_body_open' ); 
	}
?>
<a class="skip-link screen-reader-text" href="#sitemain"><?php _e( 'Skip to content', 'animals' ); ?></a>

					<div id="header">
                    	<div class="shaper"></div>
                    	<div class="container">
                        	<div class="handler">
                                <div class="header-inner">
                                    <div class="logo">
                                       <?php animals_the_custom_logo(); ?>
										<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

										<?php $description = get_bloginfo( 'description', 'display' );
										if ( $description || is_customize_preview() ) : ?>
										<p><?php echo esc_attr($description); ?></p>
										<?php endif; ?>
                                    </div><!--logo-->					                  
                                    <div class="toggle">
                                        <a class="toggleMenu" href="#"><?php esc_html_e('Menu','animals'); ?></a>
                                    </div> 						
                                    <div class="main-nav">
                                        <?php wp_nav_menu( array('theme_location'  => 'primary', 'fallback_cb' => false) ); ?>							
                                    </div>
                                    <div class="clear"></div>			
                                </div><!--header-inner-->
                             </div><!--handler-->
    					</div><!--container-->
					</div><!--header-->
		
		
<?php if ( is_front_page() && !is_home() ) { ?>
	<?php $hideslide = get_theme_mod('hide_slider', '1'); ?>
		<?php if($hideslide == ''){ ?>
                <!-- Slider Section -->
                <?php for($sld=7; $sld<10; $sld++) { ?>
                	<?php if( get_theme_mod('page-setting'.$sld)) { ?>
                	<?php $slidequery = new WP_query('page_id='.get_theme_mod('page-setting'.$sld,true)); ?>
                	<?php while( $slidequery->have_posts() ) : $slidequery->the_post();
                			$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
                			$img_arr[] = $image;
               				$id_arr[] = $post->ID;
                		endwhile;
                	}
                }
                ?>
<?php if(!empty($id_arr)){ ?>
        <div id="slider" class="nivoSlider">
            <?php 
            $i=1;
            foreach($img_arr as $url){ ?>
            <?php if(!empty($url)){ ?>
            <img src="<?php echo esc_url($url); ?>" title="#slidecaption<?php echo esc_attr($i); ?>" />
            <?php }else{ ?>
            <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/slides/default-slide.jpg" title="#slidecaption<?php echo esc_attr($i); ?>" />
            <?php } ?>
            <?php $i++; }  ?>
        </div>   
<?php 
	$i=1;
		foreach($id_arr as $id){ 
		$title = get_the_title( $id ); 
		$post = get_post($id); 
		$content = apply_filters('the_content', substr(strip_tags($post->post_content), 0, 150)); 
?>                 
<div id="slidecaption<?php echo esc_attr($i); ?>" class="nivo-html-caption">
    <div class="top-bar">
    	<h2><?php echo esc_attr($title); ?></h2>
    	<?php echo esc_attr($content); ?>
    	<a class="read-more" href="<?php the_permalink(); ?>"><?php echo esc_html(get_theme_mod('slidelink_text',__('Read More','animals'))); ?></a>
    </div>
</div>      
    <?php $i++; } ?>       
     </div>
<div class="clear"></div>        
</section>
<?php wp_reset_postdata(); ?>
<?php } ?>           
       
<div class="clear"></div>
<!-- Slider Section -->
<?php } }  ?>

      <div class="main-container">
         <?php if( function_exists('is_woocommerce') && is_woocommerce() ) { ?>
		 	<div class="content-area">
                <div class="middle-align content_sidebar">
                	<div id="sitemain" class="site-main">
         <?php } ?>