<?php
	
/* Template Name: Attorneys Directory */	
	
get_header(); ?>

<div class="main">
	
	<div id="inner_main_trigger" class="inner_main">
		
		
		
		<div class="one_column">
			
			<div class="internal_header_wrapper content">
				
				<h1><?php the_title();?></h1>
				
				<span class="internal_gold_line"></span><!-- internal_line -->
				
				</div><!-- internal_header_wrapper -->
				
				<div class="internal_attorneys_wrapper">
					
					
					<?php $posts = get_field('attorney_grid');
					
					if( $posts ): ?>
					    
					    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
					        <?php setup_postdata($post); ?>
					        
       
					        		
					 <div class="single_attorney_wrapper">
						
						<a class="" href="<?php the_permalink();?>">
						
						<div class="inner_attorney_wrapper">
						
							<img src="<?php the_field( 'profile_image' ); ?>"/>
							
							<span class="view_profile">View Profile</span><!-- view_profile -->
						
						</div><!-- inner_attorney_wrapper -->
						
						<span class="large_header"><?php the_title();?></span><!-- large_header -->
						
						<span class="sub_header"><?php the_field( 'position' ); ?></span>
						
						</a>
						
					</div><!-- single_attorney_wrapper -->
					        
					           
					        
					    <?php endforeach; ?>
					    
					    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
					<?php endif; ?>
					
					
					
					
					
				</div><!-- attorneys_wrapper -->		
		
			
			
		</div><!-- content -->
		
		
	</div><!-- inner_main -->
	
	
</div><!-- main -->



<?php get_footer(); ?>
