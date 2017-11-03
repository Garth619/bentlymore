<div class="sidebar_wrapper sidebar_blog_wrapper">

<span class="sidebar_title">Recent Stories</span><!-- sidebar_title -->

<div class="sidebar sidebar_blog">
	
	<div class="inner_sidebar">
		
		
		<ul>
		
		<?php $mymain_query = new WP_Query( array( 'post_type' => 'post','posts_per_page' => '4' ) ); while($mymain_query->have_posts()) : $mymain_query->the_post(); ?>
                	
    
    	<li>
    		<span class="recent_post_date" href=""><?php $pfx_datetwo = get_the_date(); echo $pfx_datetwo; ?></span>
    		<a class="recent_post_link" href="<?php the_permalink();?>"><?php the_title();?></a>
    	</li>
    
    
    
    <?php endwhile; ?>
    <?php wp_reset_postdata(); // reset the query ?>
		
		
		</ul>
		
		
		
	</div><!-- inner_sidebar -->
	
	
</div><!-- sidebar -->

<span class="sidebar_title">Categories</span><!-- sidebar_title -->

<div class="sidebar sidebar_blog">
	
	<div class="inner_sidebar">
		
		
		<?php dynamic_sidebar( 'sidebar_cat' ); ?>
		
		
		
	</div><!-- inner_sidebar -->
	
	
</div><!-- sidebar -->

<span class="sidebar_title">Archives</span><!-- sidebar_title -->

<div class="sidebar sidebar_blog">
	
	<div class="inner_sidebar">
		
			<?php dynamic_sidebar( 'sidebar_arch' ); ?>
		
	</div><!-- inner_sidebar -->
	
	
</div><!-- sidebar -->


</div><!-- sidebar_wrapper -->

	