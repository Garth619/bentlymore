
<?php get_header(); ?>

<div class="main">
	
	<div class="inner_main">
		
		<div class="one_column">
			
			<div class="internal_header_wrapper content">
				
				<h1 class="page-title">
<?php if ( is_day() ) : ?>
				<?php printf( __( 'Daily Archives: <span>%s</span>', 'twentyten' ), get_the_date() ); ?>
<?php elseif ( is_month() ) : ?>
				<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) ); ?>
<?php elseif ( is_year() ) : ?>
				<?php printf( __( 'Yearly Archives: <span>%s</span>', 'twentyten' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) ); ?>
<?php else : ?>
				<?php _e( 'Blog Archives', 'twentyten' ); ?>
<?php endif; ?>
			</h1>
				
				<span class="internal_gold_line"></span><!-- internal_line -->
				
				</div><!-- internal_header_wrapper -->
				
				
				<div class="blog_wrapper">
					
					<?php get_sidebar('blog'); ?>
					
					<div class="inner_content content">
			
						
						<div class="single_wrapper">
						
							<?php get_template_part( 'loop', 'index' );?>
					
						</div><!-- single_wrapper -->
						
						
						
						<?php wpbeginner_numeric_posts_nav(); ?>
			
					
					</div><!-- inner_content -->	
					
					
				</div><!-- blog_wrapper -->			
					
		
		</div><!-- one_column -->
		
		
	</div><!-- inner_main -->
	
	
</div><!-- main -->



<?php get_footer(); ?>



