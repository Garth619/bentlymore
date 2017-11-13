<?php
	
/* Template Name: Contact */	
	
get_header(); ?>




<div class="main internal_banner_main">
	
	<?php get_template_part( 'top', 'banner' ); ?>

	
	<div id="inner_main_trigger" class="inner_main">
		
		
		
		<div class="one_column">
			
			
			<div class="internal_header_wrapper content">
				
				<h1><?php the_title();?></h1>
				
				<span class="internal_gold_line"></span><!-- internal_line -->
				
				</div><!-- internal_header_wrapper -->
				
				
				<div class="contact_wrapper">
					
					
					<div class="inner_contact_address content">
						
						<a class="contact_link" href="<?php the_field( 'google_map_link','option'); ?>" target="_blank"><?php the_field( 'adress','option' ); ?></a>
						
						<span class="contact_line"></span><!-- contact_line -->
						
						<a class="contact_directions" href="<?php the_field( 'google_map_link','option'); ?>" target="_blank">Directions</a><!-- contact_directions -->
						
						<a class="contact_tel" href="tel:<?php the_field( 'phone','option'); ?>"><?php the_field( 'phone','option'); ?></a>
						
					</div><!-- inner_contact_address -->
					
					<div class="contact_map">
						
						
						<?php the_field( 'google_map_inner' ); ?>
						
						
					</div><!-- contact_map -->
					
					
				</div><!-- contact_wrapper -->
			
			
		</div><!-- one_column -->
		
		
	</div><!-- inner_main -->
	
	
</div><!-- main -->



<?php get_footer(); ?>
