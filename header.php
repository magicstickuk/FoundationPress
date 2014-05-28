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
	    });
	});
	</script>

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
      
      <h1 class="title"><?php bloginfo( 'name' ); ?></h1>

    </section>
  </nav>

  <aside class="left-off-canvas-menu">
    <?php foundationPress_mobile_off_canvas(); ?>
  </aside>
  
        <div class="top-bar-container contain-to-grid show-for-medium-up">
            <nav class="top-bar" data-topbar="">
                
                <section class="top-bar-section">
                    <?php foundationPress_top_bar_l(); ?>
                    <?php foundationPress_top_bar_r(); ?>
                </section>
            </nav>
        </div>
        
       <div class="row">
       		
       		<div class="medium-3 large-3 columns hide-for-small-only">
       			<p>29 Flowerhill Street<br/>
	   			ML6 6AP<br/>
	   			Airdrie, United Kingdom<br/>
	   			MAP</p>
       		</div>
       		
       		<div class="small-12 medium-6 large-6 columns logo">
       			<a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/logo.png"/></a>
       			
       			<h2>01236 761288 • 07852262729</h2>
       		</div>
       		
       		<div class="medium-3 large-3 columns HeaderRightmj hide-for-small-only">
       			<p>Mon - Fri 8.30am til LATE<br/>
	   			Sat - 8.30am til 3pm<br/>
	   			Sun - appointment only</br/>
       		</div>
       		

       </div>



<section class="container" role="document">
  <?php do_action('foundationPress_after_header'); ?>