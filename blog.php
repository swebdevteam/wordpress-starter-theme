<?php
/*
Template Name: Blog
*/
?>

<?php get_template_part('parts/header'); ?>
 <div class="row">
    <section id="page-header">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <?php $src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' ); ?>
      <div class="featured-image" style="background: #7a7b75;
      background-size:cover;
      background-repeat: no-repeat;
  background-image: url(<?php echo $src[0]; ?>); /* fallback */
  background-image: -moz-linear-gradient(top, rgba(0,0,0,0) 30%, rgba(0,0,0,0.6) 100%), url(<?php echo $src[0]; ?>); /* FF3.6+ */
  background-image: -webkit-gradient(linear, left top, left bottom, color-stop(30%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.6))), url(<?php echo $src[0]; ?>); /* Chrome,Safari4+ */
  background-image: -webkit-linear-gradient(top, rgba(0,0,0,0) 30%,rgba(0,0,0,0.6) 100%), url(<?php echo $src[0]; ?>); /* Chrome10+,Safari5.1+ */
  background-image: -o-linear-gradient(top, rgba(0,0,0,0) 30%,rgba(0,0,0,0.6) 100%), url(<?php echo $src[0]; ?>); /* Opera 11.10+ */
  background-image: -ms-linear-gradient(top, rgba(0,0,0,0) 30%,rgba(0,0,0,0.6) 100%), url(<?php echo $src[0]; ?>); /* IE10+ */
  background-image: linear-gradient(to bottom, rgba(0,0,0,0) 30%,rgba(0,0,0,0.6) 100%), url(<?php echo $src[0]; ?>); /* W3C */
  filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#007a7c76', endColorstr='#807a7c76',GradientType=0 ); /* IE6-9 */">
        <div class="container">
        <div class="table">
          <div class="row">
            
            <div class="col-md-6"><span class="title"><?php the_title(); ?></span></div>
            <div class="col-md-6"> </div>
              
          </div>
        </div>
        </div>
      </div>
    </section>
    </div>

    
<div class="container">
  <div class="row">
  <div class="col-xs-12">
  
  	
  	<div class="btn-group  hidden-xs">
				  <button class="btn btn-default btn-md dropdown-toggle locations" type="button" data-toggle="dropdown" aria-expanded="false">
				    <?php _e( 'Categories' ); ?> <span class="caret"></span>
				  </button>
				  
				  
				  <ul class="dropdown-menu categories" role="menu">
				    
				    <?php 
    $args = array(
	'show_option_all'    => '',
	'orderby'            => 'name',
	'order'              => 'ASC',
	'style'              => '',
	'show_count'         => 0,
	'hide_empty'         => 1,
	'use_desc_for_title' => 1,
	'child_of'           => 0,
	'feed'               => '',
	'feed_type'          => '',
	'feed_image'         => '',
	'exclude'            => '',
	'exclude_tree'       => '',
	'include'            => '',
	'hierarchical'       => 1,
	'title_li'           => __( '' ),
	'show_option_none'   => __( '' ),
	'number'             => null,
	'echo'               => 1,
	'depth'              => 0,
	'current_category'   => 0,
	'pad_counts'         => 0,
	'taxonomy'           => 'category',
	'walker'             => null
    );
    wp_list_categories( $args ); 
?>
				    					    
				  </ul>
				 
			
			</div>
  
  
	      <div id="content" role="main">
        <div role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
          <header class="page-head">
            <h2><?php // the_title(); ?></h2>
          </header>
          <?php the_content(); ?>
        </div>
        <?php endwhile; ?> 
        <?php endif; ?>
        <?php wp_reset_query(); ?>
        
         <div class="row">
        <?php 
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $args = array('posts_per_page' => 6, 'paged' => $paged );
      query_posts($args);
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post(); ?>
					<div class="col-sm-6">
		<article role="article" id="post_<?php the_ID()?>">
		<div class="excerpt-container"> 
 
          <div class="col-sm-12">
            <?php 
                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                  the_post_thumbnail('blog-featured', array( 'class' => 'img-responsive img-center attachment-post-thumbnail blog-featured' ));
                } 
                else {?> <img class="img-responsive img-center" src="<?php bloginfo('template_url'); ?>/img/sweb-logo-blog.jpg"/> <?php } ?>

          </div>
          <div class="col-sm-12">
           <header class="blog-head">
            <a href="<?php echo get_permalink(); ?>"><h3><span class="blog-title"><?php the_title()?></span></h3></a>
            <h5>
              <em>
                <!-- <span class="text-muted" class="author">By <?php the_author() ?>,</span> -->
                <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time>
              </em>
            </h5>
          </header>
          
         <?php the_excerpt( __( '&hellip; Continue reading <i class="glyphicon glyphicon-arrow-right"></i>', 'gearupsaisd' ) ); ?>
          <p class="text-muted">
            <span class="category"><i class="glyphicon glyphicon-folder-open"></i>&nbsp; Category: <?php _e(''); ?> <?php the_category(', ') ?><br/> 
<!--  <i class="glyphicon glyphicon-comment"></i>&nbsp; Comments: <?php comments_popup_link('None', '1', '%'); ?>-->
            </span></p> </div>
          <hr/>
         
		</div>
        </article>
					</div>
					
				<?php	} // end while ?>
				</div>
        <ul class="pagination">
          <li class="older pull-left"><?php next_posts_link('&laquo; Older') ?></li>
          <li class="newer pull-right"><?php previous_posts_link('Newer &raquo;') ?></li>
        </ul>
				
		<?php	} // end if ?>
         
      </div><!-- /#content -->
    </div>
  </div>
</div>
        
  </div><!-- /.row -->
  <?php get_template_part('parts/prefoot'); ?> 
</div><!-- /.container -->



<?php get_template_part('parts/footer'); ?>
