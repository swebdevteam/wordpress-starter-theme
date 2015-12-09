<?php get_template_part('parts/header'); ?>


<div class="container">
  <div class="row">
 <div class="col-xs-12">
      <div id="content" role="main">
	      <header class="page-head">
	        <h2><?php wp_title(''); ?></h2>
	      </header>
	      <?php the_content(); ?>

        <?php if(have_posts()): while(have_posts()): the_post();?>
        <article role="article" id="post_<?php the_ID()?>">
          <header class="blog-head">
            <a href="<?php echo get_permalink(); ?>"><h3><?php the_title()?></h3></a>
            <h5>
              <em>
                <!-- <span class="text-muted" class="author">By <?php the_author() ?>,</span> -->
                <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time>
              </em>
            </h5>
          </header>
          <?php the_post_thumbnail('', array( 'class' => 'img-responsive attachment-post-thumbnail')); ?>
          <?php the_excerpt( __( '&hellip; Continue reading <i class="glyphicon glyphicon-arrow-right"></i>', 'gearupsaisd' ) ); ?>
          <p class="text-muted" style="margin-bottom: 20px;">
            <i class="glyphicon glyphicon-folder-open"></i>&nbsp; Filed under: <?php _e(''); ?> <?php the_category(', ') ?><br/>
<!--  <i class="glyphicon glyphicon-comment"></i>&nbsp; Comments: <?php comments_popup_link('None', '1', '%'); ?>-->
          </p>
          <hr/>
        </article>
        <?php endwhile; ?>
        <ul class="pagination">
          <li class="older"><?php next_posts_link('&laquo; Older') ?></li>
          <li class="newer"><?php previous_posts_link('Newer &raquo;') ?></li>
        </ul>
        <?php else: ?>
        <?php // There are no posts found ?>
        <?php endif;?>
      </div><!-- /#content -->
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('parts/footer'); ?>
