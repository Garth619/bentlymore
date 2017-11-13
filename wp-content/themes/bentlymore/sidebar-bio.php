<div class="sidebar_wrapper sidebar_bio_wrapper">
	
	<?php $profile_image = get_field( 'profile_image' ); ?>
							
			<?php if($profile_image):?>
						
				<img src="<?php echo $profile_image['url']; ?>" alt="<?php echo $profile_image['alt']; ?>" />
							
			<?php else:?>
							
				<img src="<?php bloginfo('template_directory');?>/images/comingsoon.jpg" />
							
		<?php endif;?>
		
		<?php if(get_field('sidebar_accolades')): ?>
		
<div class="sidebar sidebar_bio">
	
	<div class="inner_sidebar">
		
		<ul>
			
			<?php while(has_sub_field('sidebar_accolades')): ?>
			 
					<li><?php the_sub_field( 'list_item_bullet' ); ?></li>
			    
				<?php endwhile; ?>
			 
		</ul>
		
	</div><!-- inner_sidebar -->
	
	
</div><!-- sidebar -->

<?php endif; ?>


</div><!-- sidebar_wrapper -->

	
