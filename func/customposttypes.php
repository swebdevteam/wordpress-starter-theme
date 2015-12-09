<?php

// Resgister Custom Post Types 
//////////////////////////////////////////////////////////////////////////////
   
    
//Register Issues
/* add_action('init', 'issues_register');  
	function issues_register() { 
			$labels = array(
			'name' => _x('Issues', 'post type general name'),
			'singular_name' => _x('Issue', 'post type singular name'),
			'add_new' => _x('Add New Issue', 'portfolio item'),
			'add_new_item' => __('Add New Issue'),
			'edit_item' => __('Edit Issue'),
			'new_item' => __('New Issue'),
			'view_item' => __('View Issue'),
			'search_items' => __('Search Issues'),
			'not_found' => __('No Issues found'),
			'not_found_in_trash' => __('Nothing found in Trash'),
			'parent_item_colon' => ''
		);
		
		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title','thumbnail', 'editor')
		);
		register_post_type( 'issues' , $args );  
	}  
	
// Register Issue Taxonomy
	register_taxonomy("issues_type", array("issues"), array("hierarchical" => true, "label" => "Issue Categories", "singular_label" => "Issue Category", "rewrite" => true));  

// Create Issue Column Data  
	add_filter("manage_edit-issues_columns", "issues_edit_columns");  
	add_action("manage_posts_custom_column",  "issues_custom_columns"); 

 
  
	function issues_edit_columns($columns){  
			$columns = array(  
				"cb" => "<input type=\"checkbox\" />",  
				"title" => "Title"  
				
				
			);  
			return $columns;  
	}
	
	function issues_custom_columns($column){  
			global $post;  
			switch ($column)  
			{ 
									
			}  
	} 
	

	
//////////////////////////////////////////////////////////////////////////////////	*/
?>
