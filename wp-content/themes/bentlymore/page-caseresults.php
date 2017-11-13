<?php
	
/* Template Name: Case Results */	
	
get_header(); ?>

<div class="main">
	
	<div id="inner_main_trigger" class="inner_main">
		
		
		
		<div class="one_column">
			
			<div class="internal_header_wrapper content">
				
				<h1><?php the_title();?></h1>
				
				<span class="internal_gold_line"></span><!-- internal_line -->
				
				</div><!-- internal_header_wrapper -->
				
				
				<div class="int_case_results_wrapper">
					
					
					
					<?php if(get_field('case_results_inner')): ?>
					 
						<?php while(has_sub_field('case_results_inner')): ?>
					 
							
					<div class="int_single_case_results">
						
						<div class="int_single_case_border">
							
							<div class="int_case_content">
							
								<span class="int_case_amount"><?php the_sub_field( 'case_amount' ); ?></span><!-- int_case_amount -->
							
								<span class="int_case_line"></span><!-- int_case_line -->
							
								<span class="int_case_type"><?php the_sub_field( 'case_type' ); ?></span><!-- int_case_type -->
							
								<span class="int_result"><?php the_sub_field( 'result' ); ?></span><!-- int_result -->
							
							</div><!-- int_case_content -->
							
						</div><!-- int_single_case_border -->
						
						<div class="int_case_bg_wrapper">
							
							<div class="int_case_bg_wrapper_inner">
							
							</div><!-- int_case_bg_wrapper_inner -->
							
							
						</div><!-- int_case_bg_wrapper -->
						
						<div class="int_case_hover">
									
									<div class="int_case_hover_inner content">
										
										<p><?php the_sub_field( 'case_description' ); ?></p>
										
									</div><!-- int_case_hover_inner -->
									
							</div><!-- int_case_hover -->
							
							<div class="tri"></div><!-- tri -->
						
					</div><!-- int_single_case_results -->
							
							
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
	

					
				</div><!-- int_case_results_wrapper -->
		
			
			
		</div><!-- one_column -->
		
		
	</div><!-- inner_main -->
	
	
</div><!-- main -->



<?php get_footer(); ?>
