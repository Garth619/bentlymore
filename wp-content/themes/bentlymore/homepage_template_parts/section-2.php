<section id="sec_two" class="section_two">
	
	<div class="inner_section_two">
	
		<div class="settlements_wrapper">
		
			
			<div class="settlement_slideshow_wrapper">
				
				<div class="settlement_slideshow">
					
					
					
					<?php if(get_field('settlement_slides')): ?>
					 
						<?php while(has_sub_field('settlement_slides')): ?>
					 
							<div class="settlement_slides">
						
								<img class="slide_icon" src="<?php bloginfo('template_directory');?>/images/result-ico-01.svg"/>
						
								<span class="sett_amount"><?php the_sub_field( 'settlement_amount' ); ?></span><!-- sett_amount -->
						
								<span class="brown_line"></span><!-- brown_line -->
						
								<span class="sett_type"><?php the_sub_field( 'settlement_type' ); ?></span><!-- sett_type -->
						
							</div><!-- settlement_slides -->
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
					

					
				</div><!-- settlement_slideshow -->
				
				<a class="view_more desktop" href="<?php the_permalink(13);?>"><?php the_field( 'view_more_verbiage' ); ?></a><!-- view_more -->
				<a class="view_more mobile" href="<?php the_permalink(13);?>"><?php the_field( 'view_more_mobile_verbiage' ); ?></a><!-- view_more -->
				
				<div class="desktop_grey_bg">
					
					<div class="desktop_inner_grey">
						
						
						
					</div><!-- desktop_inner_grey -->
					
				</div><!-- desktop_grey_bg -->
				
			</div><!-- settlement_slideshow_wrapper -->
		
		
		</div><!-- settlements_wrapper -->
		
		
		<div class="news_wrapper">
			
			
			<div class="inner_news_wrapper">
				
				<span class="firm_news_title"><?php the_field( 'firm_news_title' ); ?></span><!-- firm_news_title -->
				
				<div class="news_feed">
					
					
					
					<?php if(get_field('firm_news')): ?>
					 
						<?php while(has_sub_field('firm_news')): ?>
						
						
										<?php
						
												$post_object = get_sub_field('news_post');
						
												if( $post_object ): 
						
												// override $post
												$post = $post_object;
												setup_postdata( $post ); 
						
											?>
													
							
											
											<a href="<?php the_permalink();?>" class="single_news_wrapper">
						
												<div class="news_logo">
													
													<?php $press_logo = get_sub_field( 'press_logo' ); ?>
													
													<img src="<?php echo $press_logo['url']; ?>" alt="<?php echo $press_logo['alt']; ?>" />
							
												</div><!-- news_logo -->
						
												<div class="news_content_wrapper">
							
													<div class="centered_wrapper">
							
														<span class="news_date"><?php $pfx_date = get_the_date(); echo $pfx_date; ?></span><!-- news_date -->
							
														<span class="news_title"><?php echo wp_trim_words( get_the_title(), 12, '...' );
?></span><!-- news_title -->
							
													</div><!-- flex_centered_wrapper -->
							
												</div><!-- news_content_wrapper -->
						
										</a><!-- single_news_wrapper -->
										
						    
													
										<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
						<?php endif; ?>
						
					 
						
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
					
					
					
				</div><!-- news_feed -->
				
			</div><!-- inner_news_wrapper -->
			
			
		</div><!-- news_wrapper -->
		
	
	</div><!-- inner_section_two -->
	
	
</section><!-- section_two -->