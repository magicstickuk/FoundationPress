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
	<div class="small-12 medium-6 large-3 columns">
		<h2>MOT</h2>
		<p class="featimage"><img src="<?php bloginfo(template_url);?>/assets/img/icon_car.png"></p>
		<p class="feat-content">£29.99 for full MOT Test and free retest if required. It is mandatory for every vehicle over 3 years old to have a MOT Certificate</p>
		<div class="button-small">
			<a href="#">Read More</a>
		</div>
	</div>
	<div class="small-12 medium-6 large-3 columns">
		<h2>SERVICING</h2>
		<p class="featimage"><img src="<?php bloginfo(template_url);?>/assets/img/icon_speedometer.png"></p>
		<p class="feat-content">£29.99 for full MOT Test and free retest if required. It is mandatory for every vehicle over 3 years old to have a MOT Certificate</p>
		<div class="button-small">
			<a href="#">Read More</a>
		</div>
	</div>
	<div class="small-12 medium-6 large-3 columns">
		<h2>TYRES</h2>
		<p class="featimage"><img src="<?php bloginfo(template_url);?>/assets/img/icon_tyre.png"></p>
		<p class="feat-content">£29.99 for full MOT Test and free retest if required. It is mandatory for every vehicle over 3 years old to have a MOT Certificate</p>
		<div class="button-small">
			<a href="#">Read More</a>
		</div>
	</div>
	<div class="small-12 medium-6 large-3 columns">
		<h2>ABOUT</h2>
		<p class="featimage"><img src="<?php bloginfo(template_url);?>/assets/img/icon_garage.png"></p>
		<p class="feat-content">£29.99 for full MOT Test and free retest if required. It is mandatory for every vehicle over 3 years old to have a MOT Certificate</p>
		<div class="button-small">
			<a href="#">Read More</a>
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