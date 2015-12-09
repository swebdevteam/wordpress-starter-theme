</div> <!-- /end container-fluid -->

<div class="footer">  
	<div class="container">
	
	
		<div class="row">
			<div class="col-sm-4">
			<h3 class="bold uppercase">Contact us</h3>
				<ul class="contact-footer">
				
					<li>contact</li>
					<li>info</li>
					<li>hardcoded</li>
					<li>here</li>
					<li>Best practice is to widgetize this area</li>
				</ul>
				
			</div>
			
			<div class="col-sm-8">
				<h3 class="bold uppercase">Ninja form embed in theme footer code</h3>
				<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); } ?>
			</div>
			    
		</div>
		
		
		
	  <div class="row footer-bottom">
		  <div class="col-sm-8">
		  	
		  	
		  </div>
	    <div class="col-md-4 disability-icons">	
	    	
	    	
	    	     

	    </div>
	  </div>
	  
	  <div class="row">
		  <div class="col-md-12">
		  
	  	      <div id="sweblogo" class="pull-right hidden-xs">
				<a href="http://www.swebdevelopment.com" target="_blank">
				<img class="sweblogo" src="<?php bloginfo('template_url'); ?>/img/sweblogo-light.png" title="Created by Sweb Development" border="0"></a>
			</div>
				
		    <div id="sweblogo" class="visible-xs">
				<a href="http://www.swebdevelopment.com" target="_blank">
				<img class="sweblogo" src="<?php bloginfo('template_url'); ?>/img/sweblogo-light.png" title="Created by Sweb Development" border="0"></a>
			</div>
			
			<h5>Created by</h5>
			
		  </div>
		  
	  </div>
	  
	  
	</div>
</div>








	<?php wp_footer(); ?>	
	</body>
</html>
