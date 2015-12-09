<!-- <aside class="sidebar hidden-xs">

<?php if (get_post_ancestors($post->ID) == null ) { dynamic_sidebar('sidebar-widget-area'); ?>  

<?php } else { 
	$a=get_post_ancestors($post->ID);
	$root=count($a)-1;

	echo '<section class="program-subpage"><h3><i class="fa fa-graduation-cap"></i> ' . get_the_title( $a[$root] ) . '</h3></section>'; 
	$parents = get_post_ancestors( $post->ID ); 
	$children = wp_list_pages("sort_column=menu_order&title_li=&child_of=".$parents[1]."&echo=0");
 
	?>
  
	  <ul class="program-subpage-nav">
				<?php echo $children; ?>
				</ul>
			
			<?php  } ?>
  
  <?php /* Code from FBWC - By Susana - can't get if/else statements to work. */ /* $parents = get_post_ancestors( $post->ID );
		if($post->post_parent > 0) {
		
		    if (empty($parents[1])) {
		    	$children = wp_list_pages("sort_column=menu_order&title_li=&child_of=".$post->post_parent."&echo=0");
		    	}{
		    elseif (empty($parents[2]))
				$children = wp_list_pages("sort_column=menu_order&title_li=&child_of=".$parents[1]."&echo=0");
				} {
			else
				$children = wp_list_pages("sort_column=menu_order&title_li=&child_of=".$parents[2]."&echo=0");
				} }{
		else
			$children = wp_list_pages("sort_column=menu_order&title_li=&child_of=".$post->ID."&echo=0"); }
		if ($children) { ?>
			<ul class="nav nav-tabs nav-stacked">
			<?php echo $children; ?>
			</ul>
	<?php } } */ ?>

 
 
 
 

	
</aside> -->