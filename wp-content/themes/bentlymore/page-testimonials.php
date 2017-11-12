<?php
	
/* Template Name: Testimonials */	
	
get_header(); ?>




<div class="main internal_banner_main">
	
	
	 <?php get_template_part( 'top', 'banner' ); ?>

	
	<div id="inner_main_trigger" class="inner_main">
		
		
		
		<div class="one_column">
			
			
			<div class="internal_header_wrapper content">
				
				<h1><?php the_title();?></h1>
				
				<span class="internal_gold_line"></span><!-- internal_line -->
				
				</div><!-- internal_header_wrapper -->
				
				<div class="testimonials_wrapper">
					
					
					<?php if(get_field('page_testimonals')): ?>
					 
						<?php while(has_sub_field('page_testimonals')): ?>
					 
					 
							<div class="single_testimonial">
						
							<div class="single_testi_border content">
							
								<h2><?php the_sub_field( 'title' ); ?></h2>
							
							
								<?php the_sub_field( 'testimonial_content' ); ?>
							
							
							<span class="testi_line"></span><!-- testi_line -->
							
							<span class="internal_testi_name"><?php the_sub_field( 'name' ); ?></span><!-- internal_testi_name -->
							
							
						</div><!-- single_testi_border -->
						
						<div class="single_testi_bg">
							
							<div class="single_testi_bg_inner"></div><!-- single_testi_bg_inner -->
							
						</div><!-- single_testi_bg -->
						
						
						
					</div><!-- single_testimonial -->
							
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
					
					
				</div><!-- testimonials_wrapper -->
			
			
		</div><!-- one_column -->
		
		
	</div><!-- inner_main -->
	
	
</div><!-- main -->



<?php get_footer(); ?>
