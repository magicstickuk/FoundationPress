<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php if ( is_category() ) {
      echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_tag() ) {
      echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
    } elseif ( is_archive() ) {
      wp_title(''); echo ' Archive | '; bloginfo( 'name' );
    } elseif ( is_search() ) {
      echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
    } elseif ( is_home() || is_front_page() ) {
      bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
    }  elseif ( is_404() ) {
      echo 'Error 404 Not Found | '; bloginfo( 'name' );
    } elseif ( is_single() ) {
      wp_title('');
    } else {
      echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
    } ?></title>
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/app.css" />
     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/follanos.css" />
     <link href='http://fonts.googleapis.com/css?family=Muli:300,400' rel='stylesheet' type='text/css'>
    
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/assets/img/icons/apple-touch-icon-precomposed.png">
    
    <?php wp_head(); ?>
    
    <?php
    	$delay = get_field('slider_delay','options')*1000;   	
    ?>
    
    <script src="<?php bloginfo('template_url')?>/js/bjqs-1.3.min.js"></script>
	<link type="text/css" rel="Stylesheet" href="<?php bloginfo('template_url')?>/css/bjqs.css" />
	
	<script type="text/javascript">
	$(document).ready(function($) {
	    $('#my-slideshow').bjqs({
	        'height' : 300,
	        'width' : $(window).width(),
			'animtype' : 'fade',
	        'responsive' : true,
			'showmarkers' : false,
			'showcontrols' : false,
			'animspeed' : <?php echo $delay; ?>, // the delay between each slide
	    });
	    
	    $('#testimonials').bjqs({
	        'height' : 300,
	        'width' : $('#testimonials').width(),
			'animtype' : 'slide',
	        'responsive' : true,
			'showmarkers' : false,
			'showcontrols' : true,
			'nexttext' : '<img src="<?php bloginfo('template_url')?>/assets/img/arrowright.png"/>', // Text for 'next' button (can use HTML)
			'prevtext' : '<img src="<?php bloginfo('template_url')?>/assets/img/arrowleft.png"/>', // Text for 'previous' button (can use HTML)
	    });
	    
	    var centerSlide = $('#my-slideshow').height() - $('.slideContentContainer').height();
	    var DirectionHeight = 20;
	    $('#my-slideshow li').css('padding-top',centerSlide / 2 + 'px');
	    $('#testimonials .bjqs-prev A').css('top',DirectionHeight + 'px');
	    $('#testimonials .bjqs-next A').css('top',DirectionHeight + 'px');
	   
	    
	});
	
	$( window ).resize(function() {
		var centerSlide = $('#my-slideshow').height() - $('.slideContentContainer').height(); 
		var DirectionHeight = ($('#testimonials LI DIV DIV').height() / 2) + 23;   
		$('#my-slideshow li').css('padding-top',centerSlide / 2 + 'px');
		$('#testimonials .bjqs-prev A').css('top',DirectionHeight + 'px');
	    $('#testimonials .bjqs-next A').css('top',DirectionHeight + 'px');
  	});
	</script>
	
	<?php
	 
	 $location = get_field('location_of_follanos','options');
	
	?>

  </head>
  <body <?php body_class(); ?>>
  <?php do_action('foundationPress_after_body'); ?>

  <div id="outer-body-wrap">
  <div id="inner-body-wrap">
  	

  <div class="off-canvas-wrap">
  <div class="inner-wrap">
  
  <?php do_action('foundationPress_layout_start'); ?>
  
  <nav class="tab-bar show-for-small-only">
    <section class="left-small">
      <a class="left-off-canvas-toggle menu-icon" ><span></span></a>
    </section>
    <section class="middle tab-bar-section">
      
      <div id="mobileNav">
      		
      		<div id="socialTopBar">
                    	<?php if(get_field('twitter_link','options')):?>
                    		<a href="<?php the_field('twitter_link','options')?>" target="_blank"><img class="socialicons" src="<?php bloginfo('template_url')?>/assets/img/twitter.png"/></a>
                    	<?php endif;?>
                    	<?php if(get_field('facebook_link','options')):?>
                    		<a href="<?php the_field('facebook_link','options')?>" target="_blank"><img class="socialicons" src="<?php bloginfo('template_url')?>/assets/img/facebook.png"/></a>
                    	<?php endif;?>
                    </div>
      		
      		<a href="tel:<?php the_field('telephone_number', 'options');?>">Call Now</a>
      		<a href="https://www.google.com/maps/dir/Current+Location/<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>">Get Directions</a>
      </div>

    </section>
  </nav>

  <aside class="left-off-canvas-menu">
    <?php foundationPress_mobile_off_canvas(); ?>
  </aside>
  
        <div class="top-bar-container contain-to-grid show-for-medium-up">
            <nav class="top-bar" data-topbar="">
                
                <section class="top-bar-section">
                    <?php foundationPress_top_bar_l(); ?>
                    <div id="socialTopBar">
                    	<?php if(get_field('twitter_link','options')):?>
                    		<a href="<?php the_field('twitter_link','options')?>" target="_blank"><img class="socialicons" src="<?php bloginfo('template_url')?>/assets/img/twitter.png"/></a>
                    	<?php endif;?>
                    	<?php if(get_field('facebook_link','options')):?>
                    		<a href="<?php the_field('facebook_link','options')?>" target="_blank"><img class="socialicons" src="<?php bloginfo('template_url')?>/assets/img/facebook.png"/></a>
                    	<?php endif;?>
                    </div>
                </section>
            </nav>
        </div>
        
       <div class="row">
       		
       		<div class="medium-3 large-3 columns show-for-large-up">
       			<p><?php the_field('address', 'options');?><br><a href="<?php echo get_permalink('75')?>">MAP</a></p>
       			
       		</div>
       		
       		<div class="small-12 medium-12 large-6 columns logo">
       			<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png"/></a>
       			
       			<h2><?php the_field('telephone_number', 'options');?> • 07852262729</h2>
       			<p class="home_email"><a href="mailto:<?php the_field('email_address', 'options');?>"><?php the_field('email_address', 'options');?></a></p>
       		</div>
       		
       		<div class="medium-3 large-3 columns HeaderRightmj show-for-large-up">
       			<p><?php the_field('opening_hours', 'options');?></p>
       		</div>
       		

       </div>



<section class="container" role="document">
  <?php do_action('foundationPress_after_header'); ?>