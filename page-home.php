<?php
/*
Template Name: Home
*/
?>

<?php get_template_part('parts/header'); ?>

<!-- Example video with overlay -->
		<div class="row">
		<section id="container-video">
		
			<video id="headerVideo" class="hidden-xs hidden-sm hidden-ipad" loop muted autoplay="autoplay" preload="auto">
			 	<source src="http://media.sweb360.com/agave/agave_small.mp4" type="video/mp4">
			 	<source src="http://media.sweb360.com/agave/agave_small.webm" type="video/webm">
			 	<source src="http://media.sweb360.com/agave/agave_small.ogv" type="video/ogv">
			</video> 
			<!--<img class="visible-xs hidden-sm img-responsive no-video" src="<?php bloginfo('template_url'); ?>/img/video-poster.jpg" />-->
			
				<img class="video-overlay img-responsive" src="<?php bloginfo('template_url'); ?>/img/logo-video-overlay.png" />
				
				<p class="video-tagline"><?php the_field('video_tagline'); ?></p>					

	</section>
	</div>
 
  <!-- Example repeater inside banner row -->
  <div class="row">
	<section id="quick-links">
	    		<div class="container">
	    			<div class="row tiny-gutter">
									
				<?php // check if the repeater field has rows of data
						if( have_rows('quick_links') ): $i = 0; ?>
				<?php 	// loop through the rows of data
				    while ( have_rows('quick_links') ) : the_row(); $i++ ?> 
				  <div class="col-sm-4">

				  	<a href="<?php the_sub_field('link'); ?>" style="background-image:url(<?php the_sub_field('image'); ?>);">
					  	<div class="quick-link-content">
					  	<span class="small-text uppercase"><?php the_sub_field('small_text'); ?></span>
					  	<span class="lg-text"><?php the_sub_field('large_text'); ?></span>
					  	<i class="fa fa-arrow-circle-right"></i>
					  	</div>
				  	</a>
				  
				   </div>			
				  <?php  endwhile; ?> <?php else :  // no rows found ?>
					<?php endif; ?>
				</div>
	    		</div>
	
	</section>
</div>
  <!-- END Example repeater inside banner row -->

  
<?php get_template_part('parts/prefoot'); ?> 

<?php get_template_part('parts/footer'); ?>
