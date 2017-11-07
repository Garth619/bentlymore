<?php
	
/* Template Name: About Us */	
	
get_header(); ?>




<div class="main internal_banner_main">
	
	<?php get_template_part( 'top', 'banner' ); ?>

	
	<div id="inner_main_trigger" class="inner_main">
		
		
		
		<div class="one_column">
			
			
			<div class="internal_header_wrapper content">
				
				<h1><?php the_title();?></h1>
				
				<span class="internal_gold_line"></span><!-- internal_line -->
				
				</div><!-- internal_header_wrapper -->
				
				
				<div class="about_wrapper">
					
					
					<?php get_template_part( 'loop', 'page' );?>
					
					
				</div><!-- about_wrapper -->
					
					
				</div><!-- testimonials_wrapper -->
			
			
		</div><!-- one_column -->
		
		
	</div><!-- inner_main -->
	
	
</div><!-- main -->



<?php get_footer(); ?>
