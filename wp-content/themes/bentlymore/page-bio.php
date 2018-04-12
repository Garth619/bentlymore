<?php
	
/* Template Name: Attorney Bio */	
	
get_header(); ?>

<div class="main">
	
	<div id="inner_main_trigger" class="inner_main">
		
		
		
		<div class="one_column">
			
			<div class="internal_header_wrapper content">
				
				<h1><?php the_title();?></h1>
				
				<span class="bio_sub_title"><?php the_field( 'position' ); ?></span><!-- bio_sub_title -->
				
				<span class="internal_gold_line"></span><!-- internal_line -->
				
				</div><!-- internal_header_wrapper -->
				
				<div class="att_bio_wrapper">
					
					<?php get_sidebar('bio'); ?>
					
					<div class="inner_content content">
			
			
					<?php the_field( 'top_content' ); ?>


					
					<?php if(get_field('landmark_cases')) :?>
					
						<div class="view_landmark_cases">
	
							<span>View Landmark Cases</span>
	
						</div><!-- view_landmark_cases -->

						<div class="bio_slide_wrapper">

							<?php the_field( 'landmark_cases' ); ?>	
	
						</div><!-- bio_slide_wrapper -->
					
					<?php endif;?>
			
			
				</div><!-- inner_content -->	
					

				</div><!-- att_bio_wrapper -->
				
				<?php if (is_page(array('greg-bentley','keith-more'))) { ?>
					<div class="about_logo_wrapper">
						<span class="about_awards_title">Awards &amp; Organizations</span><!-- about_awards_title -->						
						
						<div class="about_logo_grid">
							
							
							<?php if(get_field('awards_logos', 9)): ?>
						 
							<?php while(has_sub_field('awards_logos', 9)): ?>
						 
									<?php $logo = get_sub_field( 'logo', 9 ); ?>
								
									<div class="about_single_logo">
								
										<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
								
									</div><!-- about_single_logo -->
						    
							<?php endwhile; ?>
						 
						<?php endif; ?>
																			
						</div><!-- about_logo_grid -->
					</div><!-- about_logo_grid -->
				<?php } ?>
			
			
		</div><!-- content -->
		
		
	</div><!-- inner_main -->
	
	
</div><!-- main -->



<?php get_footer(); ?>
