<?php
/*
Template Name: Home Page Template
*/
get_header(); ?>


<div id="slider">
	<div id="my-slideshow">
	    <ul class="bjqs">
	        <li style="background-image:url('<?php bloginfo(template_url);?>/assets/img/slidebg.jpg')">
		       
		       <div class="slideContentContainer">
			       <div class="row">
			       		<div class="small-12 large-12 columns">
			       			<h2>MOT / SERVICING / REPAIR / DIAGNOSTICS / TYRES / BATTERIES</h2>
			       		</div>
			       </div>
			       <div class="row">
			       		<div class="small-12 large-12 columns">
			       			<div class="button-large">
			       				<a href="#">Contact Us</a>
			       			</div>
			       		</div>
			       </div>
		       </div>
		        
	        </li>
	        <li style="background-image:url('<?php bloginfo(template_url);?>/assets/img/slidebg.jpg')">
		       
		       <div class="slideContentContainer">
			       <div class="row">
			       		<div class="small-12 large-12 columns">
			       			<h2>MOT / SERVICING / REPAIR / DIAGNOSTICS / TYRES / BATTERIES</h2>
			       		</div>
			       </div>
			       <div class="row">
			       		<div class="small-12 large-12 columns">
			       			<div class="button-large">
			       				<a href="#">Contact Us</a>
			       			</div>
			       		</div>
			       </div>
		       </div>
		        
	        </li>
	        
	    </ul>
	</div>
</div>

<div class="row feature-boxes">
	<div class="medium-6 large-3 columns">
		<h2>MOT</h2>
		<p class="featimage"><img src="<?php bloginfo(template_url);?>/assets/img/icon_car.png"></p>
		<p class="feat-content">£29.99 for full MOT Test and free retest if required. It is mandatory for every vehicle over 3 years old to have a MOT Certificate</p>
		<div class="button-small">
			<a href="#">Read More</a>
		</div>
	</div>
	<div class="medium-6 large-3 columns">
		<h2>SERVICING</h2>
		<p class="featimage"><img src="<?php bloginfo(template_url);?>/assets/img/icon_speedometer.png"></p>
		<p class="feat-content">£29.99 for full MOT Test and free retest if required. It is mandatory for every vehicle over 3 years old to have a MOT Certificate</p>
		<div class="button-small">
			<a href="#">Read More</a>
		</div>
	</div>
	<div class="medium-6 large-3 columns">
		<h2>TYRES</h2>
		<p class="featimage"><img src="<?php bloginfo(template_url);?>/assets/img/icon_tyre.png"></p>
		<p class="feat-content">£29.99 for full MOT Test and free retest if required. It is mandatory for every vehicle over 3 years old to have a MOT Certificate</p>
		<div class="button-small">
			<a href="#">Read More</a>
		</div>
	</div>
	<div class="medium-6 large-3 columns end">
		<h2>ABOUT</h2>
		<p class="featimage"><img src="<?php bloginfo(template_url);?>/assets/img/icon_garage.png"></p>
		<p class="feat-content">£29.99 for full MOT Test and free retest if required. It is mandatory for every vehicle over 3 years old to have a MOT Certificate</p>
		<div class="button-small">
			<a href="#">Read More</a>
		</div>
	</div>
</div>


<div class="map">
	
	<?php echo do_shortcode('
						[google-map-v3 
										
										width=			"100%"
										height=			"350"
										zoom=			"14"
										maptype=		"roadmap"
										mapalign=		"center"
										directionhint=	"false"
										language=		"default"
										poweredby=		"false"
										maptypecontrol=	"true"
										pancontrol=		"true"
										zoomcontrol=	"true"
										scalecontrol=	"true"
										streetviewcontrol="true"
										scrollwheelcontrol="false"
										draggable=		"true"
										tiltfourtyfive=	"false"
										enablegeolocationmarker="false"
										enablemarkerclustering="false"
										addmarkermashup="false"
										addmarkermashupbubble="false" 
										addmarkerlist=	"55.8680374,-3.9730085{}mappin.png{}Follanos Garage"
										bubbleautopan=	"true" 
										distanceunits=	"miles"
										showbike=		"false"
										showtraffic=	"false"
										showpanoramio=	"false"
						]')
		?>
	
	
</div>

<div class="row testimonials">
	<div class="small-12 large-12 columns">
	
		<div id="testimonials">
	    <ul class="bjqs">
	        <li>
		       
		       <div class="row">
		       			<div class="small-10 small-centered large-centered large-10 columns">
		       				<p class="quote">I was driving a death trap for 5 months and i didn't know, Follano's fixed everything and I feel like I'm driving a new car.  I highly recommend these guys</p>
		       				
		       				<p class="bywhom">Arlene Fraser</p>
		       			</div>
		       </div>
		        
	        </li>
	        <li>
		       
		       <div class="row">
		       			<div class="small-8 small-centered large-centered large-8 columns">
		       				Sofia
		       			</div>
		       </div>
		        
	        </li>
	       
	        
	    </ul>
	</div>
	
	</div>

</div>

<div class="row">
	<div class="small-12 large-12 columns" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php comments_template(); ?>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
</div>
		
<?php get_footer(); ?>