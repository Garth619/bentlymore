<?php
	
/* Template Name: Subfolder: Riverside */	
	
get_header(); ?>


<div class="main">
	
	<div id="inner_main_trigger" class="inner_main">
		
		<div class="sidebar_wrapper">		
			<div class="sidebar">
				<div class="inner_sidebar">
					 <?php wp_nav_menu( array('menu' => 'Sidebar: Riverside' )); ?>
				</div><!-- inner_sidebar -->
			</div><!-- sidebar -->
		</div><!-- sidebar_wrapper -->

		<div class="inner_content content">
			
			<h1><?php the_title();?></h1>
			
			<?php get_template_part( 'loop', 'page' );?>
			
			
			
		</div><!-- inner_content -->
		
		
	</div><!-- inner_main -->
	
	
</div><!-- main -->



<?php get_footer(); ?>
