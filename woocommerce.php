<?php get_template_part('parts/header'); ?>

<div class="container">
  <div class="row">

    <div class="col-xs-12">
      <div id="content" role="main">
        <div class="woocommerce">
					<?php woocommerce_content(); ?>
				</div>
      </div><!-- /#content -->      
    </div>
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('parts/footer'); ?>
