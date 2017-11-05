<?php
	
/* Template Name: About Us */	
	
get_header(); ?>




<div class="main internal_banner_main">
	
	<section class="banner">
	
	<span class="banner_content">Telling<br/> Your Story</span>
	
	<a class="begin desktop" href="">begin with a free consultation</a><!-- begin -->
	
	<a class="begin mobile" href="">free consultation</a><!-- begin -->
	
	<div class="scroll_wrapper">
		
		<div class="scroll_lines">
			
			<span class="orange_line"></span><!-- orange_line -->
			<span class="white_line"></span><!-- white_line -->
			
		</div><!-- scroll_lines -->
		
		<span class="scroll">Scroll</span><!-- scroll -->
		
	</div><!-- scroll_wrapper -->
	
</section><!-- banner -->

	
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
