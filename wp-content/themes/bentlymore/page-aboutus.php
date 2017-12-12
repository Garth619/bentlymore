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
				
				
				<div class="about_wrapper content">
					
					
					<?php get_template_part( 'loop', 'page' );?>
					
					
					<div class="about_logo_wrapper">

						<span class="about_awards_title">Awards & Organizations</span><!-- about_awards_title -->
						
						
						<div class="about_logo_grid">
							
							
							<?php if(get_field('awards_logos')): ?>
						 
							<?php while(has_sub_field('awards_logos')): ?>
						 
									<?php $logo = get_sub_field( 'logo' ); ?>
								
									<div class="about_single_logo">
								
										<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
								
									</div><!-- about_single_logo -->
						    
							<?php endwhile; ?>
						 
						<?php endif; ?>
						

							
							
						</div><!-- about_logo_grid -->
						
						
						
					</div><!-- about_logo_grid -->
					
					
					
				</div><!-- about_wrapper -->
				
					
					
				</div><!-- testimonials_wrapper -->
			
			
		</div><!-- one_column -->
		
		
	</div><!-- inner_main -->
	
	
</div><!-- main -->



<?php get_footer(); ?>
