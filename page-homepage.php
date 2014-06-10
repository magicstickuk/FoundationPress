<?php
/*
Template Name: Home Page Template
*/
get_header(); ?>

<?php
	 
	 $location = get_field('location_of_follanos','options');
	
?>

<div id="slider">
	<div id="my-slideshow">
	    <ul class="bjqs">
	    
	    	<?php if(get_field('slideshow','options')): ?>
 

 
				<?php while(has_sub_field('slideshow','options')): ?>
 
					 <li style="background-image:url('<?php the_sub_field('image'); ?>')">
		       
					       <div class="slideContentContainer">
						       <div class="row">
						       		<div class="small-12 large-12 columns">
						       			<h2><?php the_sub_field('slide_content'); ?></h2>
						       		</div>
						       </div>
						       <div class="row">
						       		<div class="small-12 large-12 columns">
						       			<div class="button-large">
						       				<a href="<?php the_sub_field('button_link'); ?>"><?php the_sub_field('button_text'); ?></a>
						       			</div>
						       		</div>
						       </div>
					       </div>
		        
					</li>
 
				<?php endwhile; ?>
 

 
			<?php endif; ?>
	        
	        
	    </ul>
	</div>
</div>


<div class="row address hide-for-large-up">
	
	<div class="small-10 medium-6 columns show-for-medium-only">
	
			<h2>Address</h2>
			
			<p><?php the_field('address', 'options');?></p>
	
	</div>
	
	<div class="small-12 medium-6 columns">
	
			<h2>Opening Hours</h2>
			
			<p><?php the_field('opening_hours', 'options');?></p>
			
			
	
	</div>
	
	
	
</div>

<div class="row openinghours hide-for-large-up">
	
	
	
</div>

<div class="row feature-boxes">

<?php if(get_field('feature_box')): ?>
 

 
				<?php while(has_sub_field('feature_box')): ?>
				
						<div class="medium-6 large-3 columns">
							<h2><?php the_sub_field('title'); ?></h2>
							<p class="featimage"><img src="<?php the_sub_field('icon'); ?>"></p>
							<p class="feat-content"><?php the_sub_field('content'); ?>...</p>
							<div class="button-small">
								<a href="<?php the_sub_field('link'); ?>" class="<?php the_sub_field('class'); ?>">Read More</a>
							</div>
						</div>
				
				<?php endwhile; ?>
 

 
<?php endif; ?>
	
	
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
										addmarkerlist=	"'.$location['lat'].','. $location['lng'] .'{}mappin.png{}Follanos Garage"
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
	    
	    	<?php if(get_field('testimonials','options')): ?>
 

 
				<?php while(has_sub_field('testimonials','options')): ?>
				
						<li>
		       
					       <div class="row">
					       			<div class="small-10 small-centered large-centered large-10 columns">
					       				<p class="quote"><?php the_sub_field('quote'); ?></p>
					       				
					       				<p class="bywhom"><?php the_sub_field('quote_by'); ?></p>
					       			</div>
					       </div>
		        
			   			</li>
				
				<?php endwhile; ?>

 
			<?php endif; ?>
	        
	        
	    </ul>
	</div>
	
	</div>

</div>


		
<?php get_footer(); ?>