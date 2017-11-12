<section id="sec_five_trigger" class="section_five">
	
	
	<div class="sec_five_white_spacer"></div><!-- sec_five_spacer -->
	
	<div class="section_five_inner">
		
		<div class="sec_five_spacer"></div><!-- sec_five_spacer -->
		
		<div class="sec_five_image_container">
			
			<?php $testimonials_image = get_field( 'testimonials_image' ); ?>
	
			<img src="<?php echo $testimonials_image['url']; ?>" alt="<?php echo $testimonials_image['alt']; ?>" />

			
		</div><!-- image_container -->
		
		<div class="testi_wrapper">
			
			<span class="testi_title"><?php the_field( 'testimonials_title' ); ?></span><!-- testi_wrapper -->
			
	
			
		<div class="testi_content_wrapper">
			
			<span class="quote">“</span><!-- quote -->
			
			<span class="testi_content"><span class="inner_quote">“</span>
<?php the_field( 'testimonial_content' ); ?>”</span><!-- test_content -->
			
			<span class="testi_name"><?php the_field( 'testimonial_name' ); ?></span><!-- testi_name -->
			
		</div><!-- testi_content_wrapper -->
		
		
		
	</div><!-- testi_wrapper -->
	
	<div class="bottom_line_wrapper">
		
		<span class="testi_line"></span><!-- testi_line -->
	
		<span class="testi_line_dotted"></span><!-- testi_line_dotted -->
		
		
	</div><!-- bottom_line_wrapper -->
	
	
	<div class="sec_five_content content">
		
		
		<div class="col">
			
			<img class="mobile_image" src="<?php echo $testimonials_image['url']; ?>" alt="<?php echo $testimonials_image['alt']; ?>"/>
			
			<?php the_field( 'section_five_col_one' ); ?>

			
			
			
		</div><!-- col -->
		
		
		<div class="col">
			
			
			<?php the_field( 'section_five_col_two' ); ?>

			
			
		</div><!-- col -->
		
		
	</div><!-- sec_five_content -->
	
	
		
	</div><!-- section_five_inner -->
	
	
</section><!-- section_five -->