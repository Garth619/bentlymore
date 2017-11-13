<div class="sidebar_wrapper sidebar_bio_wrapper">
	
	<?php $profile_image = get_field( 'profile_image' ); ?>
	
	<img src="<?php echo $profile_image['url']; ?>" alt="<?php echo $profile_image['alt']; ?>" />
		
<div class="sidebar sidebar_bio">
	
	<div class="inner_sidebar">
		
		<ul>
			
			<?php if(get_field('sidebar_accolades')): ?>
			 
				<?php while(has_sub_field('sidebar_accolades')): ?>
			 
					<li><?php the_sub_field( 'list_item_bullet' ); ?></li>
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		</ul>
		
		
		
	</div><!-- inner_sidebar -->
	
	
</div><!-- sidebar -->


</div><!-- sidebar_wrapper -->

	
