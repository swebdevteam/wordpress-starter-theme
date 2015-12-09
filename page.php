<?php get_template_part('parts/header'); ?>


  <div class="row">
  <section id="page-header">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' ); ?>
		<div class="featured-image" style="background: #7a7b75;
background-image: url(<?php echo $src[0]; ?>); /* fallback */
background-image: -moz-linear-gradient(top, rgba(0,0,0,0) 30%, rgba(0,0,0,0.6) 100%), url(<?php echo $src[0]; ?>); /* FF3.6+ */
background-image: -webkit-gradient(linear, left top, left bottom, color-stop(30%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.6))), url(<?php echo $src[0]; ?>); /* Chrome,Safari4+ */
background-image: -webkit-linear-gradient(top, rgba(0,0,0,0) 30%,rgba(0,0,0,0.6) 100%), url(<?php echo $src[0]; ?>); /* Chrome10+,Safari5.1+ */
background-image: -o-linear-gradient(top, rgba(0,0,0,0) 30%,rgba(0,0,0,0.6) 100%), url(<?php echo $src[0]; ?>); /* Opera 11.10+ */
background-image: -ms-linear-gradient(top, rgba(0,0,0,0) 30%,rgba(0,0,0,0.6) 100%), url(<?php echo $src[0]; ?>); /* IE10+ */
background-image: linear-gradient(to bottom, rgba(0,0,0,0) 30%,rgba(0,0,0,0.6) 100%), url(<?php echo $src[0]; ?>); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#007a7c76', endColorstr='#807a7c76',GradientType=0 ); /* IE6-9 */
background-size:cover;">
			<div class="container">
			<div class="table">
				<div class="row">
					
					<div class="col-md-6"><span class="title"><?php the_title(); ?></span></div>
					<div class="col-md-6"></div>	
				</div>
			</div>
			</div>
		</div>
	</section>
  </div>
  
  <div class="container">
  
   <div class="row">
  <div class="col-xs-12">
      <div id="content" role="main">
        <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
          <header class="page-head">
            <!-- <h2><?php // the_title(); ?></h2> -->
          </header>
          <?php the_content(); ?>
        </article>
        <?php endwhile; ?> 
        <?php else: ?>
        <?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
        <?php endif;?>
      </div><!-- /#content -->
    </div>
    
    
    
  </div><!-- /.row -->
  <?php get_template_part('parts/prefoot'); ?> 
</div><!-- /.container -->



<?php get_template_part('parts/footer'); ?>
