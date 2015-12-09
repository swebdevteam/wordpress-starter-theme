<?php

function gearupsaisd_widgets_init() {

  	/*
    Sidebar (one widget area)
     */
    register_sidebar( array(
        'name' => __( 'Sidebar', 'gearupsaisd' ),
        'id' => 'sidebar-widget-area',
        'description' => __( 'The sidebar widget area', 'gearupsaisd' ),
        'before_widget' => '<section class="%1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ) );

  	/*
    Footer (three widget areas)
     */
    register_sidebar( array(
        'name' => __( 'Footer', 'gearupsaisd' ),
        'id' => 'footer-widget-area',
        'description' => __( 'The footer widget area', 'gearupsaisd' ),
        'before_widget' => '<div class="%1$s footer-box">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="hidden">',
        'after_title' => '</h3>',
    ) );
    
       	/*
    Homepage Events Calendar Widget
     */
    register_sidebar( array(
        'name' => __( 'Events Calendar', 'gearupsaisd' ),
        'id' => 'events-area',
        'description' => __( 'Homepage Events Calendar widget', 'gearupsaisd' ),
        'before_widget' => '<div class="%1$s events-box">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    

    
      	/*
    Homepage Countdown Widget
     */
    register_sidebar( array(
        'name' => __( 'Countdown', 'gearupsaisd' ),
        'id' => 'countdown-area',
        'description' => __( 'Homepage countdown widget', 'gearupsaisd' ),
        'before_widget' => '<div class="%1$s countdown-box">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    
    
      	/*
    Homepage Testimonial widget
     */
    register_sidebar( array(
        'name' => __( 'Testimonial Slider', 'gearupsaisd' ),
        'id' => 'testimonial-area',
        'description' => __( 'Homepage testimonial widget', 'gearupsaisd' ),
        'before_widget' => '<div class="%1$s countdown-box">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

}
add_action( 'widgets_init', 'gearupsaisd_widgets_init' );

?>