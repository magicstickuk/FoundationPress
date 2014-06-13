<?php
/*
Template Name: Full Width
*/
get_header(); ?>
<div class="row">
	<div class="small-12 large-12 columns" role="main">
	<?php
	 
	 $location = get_field('location_of_follanos','options');
	
	?>
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title centerme"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>
				
				<?php if(is_page(75)):?>
				<p><div class="button-small">
								<a href="https://www.google.com/maps/dir/Current+Location/<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>" style="cursor: pointer;" target="_blank">Get Directions</a>
				</div>
				</p>
				<?php endif;?>
				

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