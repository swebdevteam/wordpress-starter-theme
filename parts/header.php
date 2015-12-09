<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml"> 
<head>
	<title><?php wp_title(''); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- IOS icons -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?php bloginfo('template_url'); ?>/img/60.png" rel="apple-touch-icon" />
<link href="<?php bloginfo('template_url'); ?>/img/76.png" rel="apple-touch-icon" sizes="76x76" />
<link href="<?php bloginfo('template_url'); ?>/img/120.png" rel="apple-touch-icon" sizes="120x120" />
<link href="<?php bloginfo('template_url'); ?>/img/152.png" rel="apple-touch-icon" sizes="152x152" />
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
 <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <!-- <script src="//code.jquery.com/jquery-1.10.2.js"></script> -->
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

 
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->    
<div class="container-fluid">
	<div class="row">
		<div class="header">				
				<div id="nav-affix" class="header-affixed affix nav-container">
				
					<div class="container">
				    <div class="row">
				    	<div class="col-xs-2 visible-xs"><button id="trigger-overlay-mobile" type="button"><i class="fa fa-bars fa-2x"></i></button>
					    	
				    	</div>
				     
            <div class="col-xs-8 col-sm-3 col-xl-3 col-md-4 logo-img">
            	<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src=" <?php bloginfo( 'template_url' ); ?>/img/header-logo.png" alt="" /></a>
            </div>
             <a class="icon contact visible-xs col-xs-2" target="_blank" href="tel://1-855-972-9350">
				<img src="<?php bloginfo('template_url'); ?>/img/contact.png">
			  </a>
            
        <div class="col-xs-12 col-sm-3 col-md-3"></div>    
		
    
        <div class="hidden-xs col-sm-6 col-md-5 col-xl-4  nav-section">
          <a class="icon facebook" target="_blank" title="Facebook" href="#">
          	<img src="<?php bloginfo('template_url'); ?>/img/fb-icon.png">
          </a>
           <a class="icon twitter" target="_blank" title="Twitter" href="#">
          	<img src="<?php bloginfo('template_url'); ?>/img/twitter-icon.png">
          </a>
           <a class="icon pinterest" target="_blank" title="Pinterest" href="#">
          	<img src="<?php bloginfo('template_url'); ?>/img/pin-icon.png">
          </a>
           <a class="icon instagram"  target="_blank" title="Instagram" href="#">
          	<img src="<?php bloginfo('template_url'); ?>/img/ig-icon.png">
          </a>
          <a class="icon contact" data-toggle="tooltip" data-placement="bottom" title="Contact Us" href="/contact">
          	<img src="<?php bloginfo('template_url'); ?>/img/contact.png">
          </a>
	        
          
        </div>
    </div>
</div>
				</div>
				
				
							</div>
			</div>
	<div class="container">		
	
	<div class="collapse navbar-collapse">

		<nav>
		<?php
                   <?php
                wp_nav_menu( array(
                        'theme_location'    => 'main',
                        'depth' => 0,
                  'container' => false,
                  'fallback_cb' => false,
                  'walker' => new BootstrapNavMenuWalker()
                       )
                );
                ?>                ?>
		</nav>
	</div>
	</div>


