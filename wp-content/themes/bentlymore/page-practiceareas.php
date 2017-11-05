<?php
	
/* Template Name: Practice Areas Directory */	
	
get_header(); ?>

<div class="main">
	
	<div id="inner_main_trigger" class="inner_main">
		
		
		
		<div class="one_column">
			
			<div class="internal_header_wrapper content">
				
				<h1><?php the_title();?></h1>
				
				<span class="internal_gold_line"></span><!-- internal_line -->
				
				</div><!-- internal_header_wrapper -->
				
				<div class="pa_wrapper">
					
					
					<div class="inner_pa_border_wrapper">
						
						
						<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'practicearea_menu' ) ); ?>
						
						
					</div><!-- inner_pa_border_wrapper -->
					
					<div class="inner_pa_wrapper">
						
						
					</div><!-- inner_pa_wrapper -->
					
					
				</div><!-- pa_wrapper -->
				
		
			
			
		</div><!-- content -->
		
		
	</div><!-- inner_main -->
	
	
</div><!-- main -->



<?php get_footer(); ?>
