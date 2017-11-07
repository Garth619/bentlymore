<?php
	
/* Template Name: Video Center */	
	
get_header(); ?>

<div class="main">
	
	<div id="inner_main_trigger" class="inner_main">
		
		
		
		<div class="one_column">
			
			<div class="internal_header_wrapper content">
				
				<h1><?php the_title();?></h1>
				
				<span class="internal_gold_line"></span><!-- internal_line -->
				
				</div><!-- internal_header_wrapper -->
				
				<div class="video_center_wrapper">
					
					
					
					<?php if(get_field('video_center')): ?>
					 
						<?php while(has_sub_field('video_center')): ?>
					 
						
						
									<div class="single_video_wrapper">
						
						<div class="inner_video_wrapper">
							
								
							
							<div class="wistia_responsive_padding" style="padding:56.25% 0 0 0;position:relative;"><div class="wistia_responsive_wrapper" style="height:100%;left:0;position:absolute;top:0;width:100%;"><span class="wistia_embed wistia_async_<?php the_sub_field( 'video_id_number' ); ?> popover=true popoverAnimateThumbnail=true videoFoam=true" style="display:inline-block;height:100%;width:100%">&nbsp;</span></div></div>
							
							<div class="play_wrapper">
								
								
								<svg class="vc_play" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 99 99">
									
									<defs>
									
									
									
									</defs><title>play</title>
									
									
									<circle id="circle_two" class="vc_cls-1" cx="49.5" cy="49.5" r="49.5"/>
									
									<path id="rec_two" data-name="Rectangle 18 copy 2" class="vc_cls-2" d="M44.8,36.3l20,15-20,15"/>
									<path class="vc_cls-2" d="M-66.5-67"/>
									
								</svg>
								
								
							</div><!-- play_wrapper -->
							
							
						</div><!-- inner_video_wrapper -->
						
						
						
						<span class="wistia_embed wistia_async_<?php the_sub_field( 'video_id_number' ); ?> popover=true popoverContent=link">
						
							<a href="#">
						
								<span class="video_center_title"><?php the_sub_field( 'video_title' ); ?></span><!-- video_title -->
								<span class="video_center_play_title">Play</span><!-- video_center_play_title -->
						
							</a>
						
						</span>
						
						
					</div><!-- single_video_wrapper -->
						
						
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
					
					
				
					<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>
					
				</div><!-- video_center_wrapper -->
				
		
			
			
		</div><!-- content -->
		
		
	</div><!-- inner_main -->
	
	
</div><!-- main -->



<?php get_footer(); ?>
