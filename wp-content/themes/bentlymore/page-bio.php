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
				
		
			
			
		</div><!-- content -->
		
		
	</div><!-- inner_main -->
	
	
</div><!-- main -->



<?php get_footer(); ?>
