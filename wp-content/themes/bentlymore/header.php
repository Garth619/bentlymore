<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

				
<header id="header_trigger">
		
		<div class="inner_header">
			
			<a class="logo_link" href="<?php bloginfo('url');?>">
				
				<?php if(is_front_page() || is_page_template('page-testimonials.php') || is_page_template('page-aboutus.php') || is_page_template('page-contact.php')): ?>
				
				<img class="logo" src="<?php bloginfo('template_directory');?>/images/logo.svg"/>
				
				<?php else:?>
				
				<img class="logo" src="<?php bloginfo('template_directory');?>/images/logo-inner.svg"/>
				
				<?php endif; ?>
				
			</a><!-- logo_link -->
			
			<div class="mobile_logo_wrapper">
				
				<a class="" href="<?php bloginfo('url');?>">
					
					<svg id="mobile_logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 260.2 15.1"><defs>
						
						
						<style>.mobile_logo-cls-1{fill:#fff;}</style>
						
						
						</defs><title>logo-mobile</title><path class="mobile_logo-cls-1" d="M7.1,10.1a5.93,5.93,0,0,0,3.1-1.2,2.76,2.76,0,0,0,1-2.3c0-2.3-2-3.4-6-3.4l-2.6.1L.2,3.4v.5H.5a3.71,3.71,0,0,1,1.4.2.84.84,0,0,1,.4.7A11,11,0,0,1,2.4,7v7.1a11.66,11.66,0,0,1-.1,2.3c-.1.3-.2.6-.5.7s-.7.2-1.3.2H0v.5H5.7a15.21,15.21,0,0,0,3.4-.3,3.93,3.93,0,0,0,2.1-1.3,3.85,3.85,0,0,0,.8-2.4,3.22,3.22,0,0,0-1.2-2.6A6.76,6.76,0,0,0,7.1,10.1ZM4.5,3.8h.9a6.33,6.33,0,0,1,2.3.3,2,2,0,0,1,1,1A3.69,3.69,0,0,1,9,6.8a3.29,3.29,0,0,1-.8,2.4A6,6,0,0,1,5,9.9H4.6V3.8ZM8.8,16.5a3.42,3.42,0,0,1-2.6.9,2.06,2.06,0,0,1-1.3-.3,1.23,1.23,0,0,1-.4-.8,15,15,0,0,1-.1-2.6V10.5h.8a5,5,0,0,1,3.4.9,3.7,3.7,0,0,1,1,2.7A2.84,2.84,0,0,1,8.8,16.5Z" transform="translate(0 -3.1)"/><path class="mobile_logo-cls-1" d="M30.4,13.4h-.5a6.47,6.47,0,0,1-1.1,2.5,3.13,3.13,0,0,1-1.4,1.2,5,5,0,0,1-1.9.3H24.4c-1,0-1.6-.2-1.8-.5a8,8,0,0,1-.3-3V10.5H24a4.15,4.15,0,0,1,1.3.1,1,1,0,0,1,.6.5,5.14,5.14,0,0,1,.2,1.6h.5v-5h-.5A4.55,4.55,0,0,1,26,9.1a1.7,1.7,0,0,1-.6.6,4.87,4.87,0,0,1-1.5.2H22.4v-6h2a10.18,10.18,0,0,1,2.2.2,2,2,0,0,1,1.2.8A5.38,5.38,0,0,1,28.6,7h.5l-.3-3.6H18.4v.5a3.71,3.71,0,0,1,1.4.2.84.84,0,0,1,.4.7A11.62,11.62,0,0,1,20.3,7v7.1a11.66,11.66,0,0,1-.1,2.3,1.61,1.61,0,0,1-.4.7,2.21,2.21,0,0,1-1.4.3h-.3v.5h12Z" transform="translate(0 -3.1)"/><path class="mobile_logo-cls-1" d="M46.5,3.9a6.05,6.05,0,0,1,1.5.2,1.83,1.83,0,0,1,.8.6A3.47,3.47,0,0,1,49,6v8.7L40.4,3.4H36.1v.5a4,4,0,0,1,1.5.2,1.28,1.28,0,0,1,.5.7A9.47,9.47,0,0,1,38.3,7v7.7a6.7,6.7,0,0,1-.1,1.7,1.87,1.87,0,0,1-.6.7,5.29,5.29,0,0,1-1.6.4V18h5.4v-.5a3.42,3.42,0,0,1-1.7-.3,1.54,1.54,0,0,1-.7-.7,6.7,6.7,0,0,1-.1-1.7V4.6L49,18.2h.5V6.2a4.15,4.15,0,0,1,.1-1.3,1.2,1.2,0,0,1,.7-.7,4.58,4.58,0,0,1,1.5-.4V3.4H46.5Z" transform="translate(0 -3.1)"/><path class="mobile_logo-cls-1" d="M57,3.4l-.1,3.5h.5A14.24,14.24,0,0,1,58,4.8,2.16,2.16,0,0,1,59,4a8.71,8.71,0,0,1,1.9-.1H63V14.2a11.66,11.66,0,0,1-.1,2.3c-.1.3-.2.6-.5.7s-.7.2-1.3.2h-.8v.5h7.3v-.5H67a1.88,1.88,0,0,1-1.3-.3,1,1,0,0,1-.4-.8,11.62,11.62,0,0,1-.1-2.2V3.9h2.3a7.16,7.16,0,0,1,1.7.1,2.17,2.17,0,0,1,.9.8,5.61,5.61,0,0,1,.7,2.1h.5l-.1-3.5Z" transform="translate(0 -3.1)"/><path class="mobile_logo-cls-1" d="M89.2,13.6h-.5a6.55,6.55,0,0,1-1.1,2.5,2.67,2.67,0,0,1-1.2,1,5.29,5.29,0,0,1-2,.2H83.3a4.66,4.66,0,0,1-1.6-.2c-.3-.1-.4-.4-.5-.6a8.75,8.75,0,0,1-.1-2V7a11.66,11.66,0,0,1,.1-2.3,1.61,1.61,0,0,1,.4-.7A3.71,3.71,0,0,1,83,3.8h.6V3.4h-7v.5H77a3.71,3.71,0,0,1,1.4.2.84.84,0,0,1,.4.7A5.34,5.34,0,0,1,79,7v7.1a11.66,11.66,0,0,1-.1,2.3c-.1.3-.2.6-.5.7s-.7.2-1.3.2h-.4v.5H89.1Z" transform="translate(0 -3.1)"/><path class="mobile_logo-cls-1" d="M106.8,13.4h-.5a6.47,6.47,0,0,1-1.1,2.5,3.13,3.13,0,0,1-1.4,1.2,5,5,0,0,1-1.9.3h-1.1c-1,0-1.6-.2-1.8-.5a8,8,0,0,1-.3-3V10.5h1.6a4.15,4.15,0,0,1,1.3.1,1,1,0,0,1,.6.5,5.14,5.14,0,0,1,.2,1.6h.5v-5h-.5a4.55,4.55,0,0,1-.1,1.4,1.7,1.7,0,0,1-.6.6,4.87,4.87,0,0,1-1.5.2H98.7v-6h2a10.18,10.18,0,0,1,2.2.2,2,2,0,0,1,1.2.8,5.33,5.33,0,0,1,.8,2.2h.5l-.3-3.6H94.8V4a3.71,3.71,0,0,1,1.4.2.84.84,0,0,1,.4.7,11.62,11.62,0,0,1,.1,2.2v7.1a11.66,11.66,0,0,1-.1,2.3,1.61,1.61,0,0,1-.4.7,2.21,2.21,0,0,1-1.4.3h-.3V18h12Z" transform="translate(0 -3.1)"/><path class="mobile_logo-cls-1" d="M126.8,3.4H122v.5c.6,0,1.1.1,1.3.4s.4.5.4.8a3.91,3.91,0,0,1-.7,1.7l-2.9,4.8-3.5-5.7a2.43,2.43,0,0,1-.5-1.2c0-.5.5-.8,1.7-.8V3.4h-5.9v.5c.6,0,1.1.1,1.3.4a16.75,16.75,0,0,1,1.5,2.2l3.6,6v1.8a11.66,11.66,0,0,1-.1,2.3c-.1.3-.2.6-.5.7s-.7.2-1.3.2h-.2V18h6.2v-.5a4.87,4.87,0,0,1-1.5-.2,1.28,1.28,0,0,1-.5-.7,12.31,12.31,0,0,1-.1-2.4V12.3l3.3-5.4a8.92,8.92,0,0,1,1.6-2.2,2.64,2.64,0,0,1,1.6-.7Z" transform="translate(0 -3.1)"/><path class="mobile_logo-cls-1" d="M144.2,7.9a.57.57,0,0,0-.6.6.46.46,0,0,0,.4.5.45.45,0,0,0,.4-.3.37.37,0,0,0-.4-.4h0s.8-.2.8.6-.6,1.1-1.3,1.3-1.6.5-1.6,1.4a.67.67,0,0,0,.6.7.37.37,0,0,0,.4-.4.27.27,0,0,0-.3-.3c-.2,0-.3.1-.3.4h0c0-.1-.1-.2-.1-.3,0-.6.6-.7,1.4-.9a1.7,1.7,0,0,1,.1.7,1.55,1.55,0,0,1-1.7,1.6c-1.3,0-1.8-.7-1.7-1.5a1.21,1.21,0,0,1,.7-1.2c.2.1.3.2.5.2s.3,0,.4-.1a.27.27,0,0,0-.3-.3h-.5a.66.66,0,0,1-.1-.6.94.94,0,0,1,1-1c.4,0,.6.1.7.3h0c-.4-.1-.5.2-.5.4a.43.43,0,0,0,.4.4.54.54,0,0,0,.5-.5c0-.5-.4-.9-1.1-.9a1.15,1.15,0,0,0-1.2,1.2,1.45,1.45,0,0,0,.2.7,1.65,1.65,0,0,0-1.3,1.7c0,1.1,1,1.7,2.3,1.7a2,2,0,0,0,2.3-2,2.92,2.92,0,0,0-.2-.9c.9-.2,1.5-.6,1.5-1.6C145.3,8.2,144.8,7.9,144.2,7.9Z" transform="translate(0 -3.1)"/><path class="mobile_logo-cls-1" d="M173.7,14.1a11.66,11.66,0,0,1-.1,2.3c-.1.3-.2.6-.5.7s-.7.2-1.3.2h-.5v.5h7v-.5h-.6a1.88,1.88,0,0,1-1.3-.3,1,1,0,0,1-.4-.8,11.62,11.62,0,0,1-.1-2.2V7a11.66,11.66,0,0,1,.1-2.3,1.61,1.61,0,0,1,.4-.7,3.71,3.71,0,0,1,1.4-.2h.5V3.4h-4.5l-5.3,12-5.3-12h-4.4v.5h.4a3.71,3.71,0,0,1,1.4.2.84.84,0,0,1,.4.7,11,11,0,0,1,.1,2.2v6.3a15.63,15.63,0,0,1-.1,2.5,1.9,1.9,0,0,1-.7,1.1,2.46,2.46,0,0,1-1.5.5v.5H164v-.5a2.54,2.54,0,0,1-1.6-.5,1.9,1.9,0,0,1-.7-1.1,13.58,13.58,0,0,1-.1-2.4V4.9l5.8,13h.5l5.8-13v9.2Z" transform="translate(0 -3.1)"/><path class="mobile_logo-cls-1" d="M192.1,3.1a8.34,8.34,0,0,0-5.6,2,7.1,7.1,0,0,0-2.3,5.4,7,7,0,0,0,2.2,5.5,8,8,0,0,0,5.7,2.1,7.7,7.7,0,0,0,5.7-2.1,7.09,7.09,0,0,0,2.2-5.5A7,7,0,0,0,197.7,5,8.81,8.81,0,0,0,192.1,3.1Zm4,12.8a4.7,4.7,0,0,1-3.9,1.8,4.91,4.91,0,0,1-4.2-1.8,8.6,8.6,0,0,1-1.4-5.3A8.48,8.48,0,0,1,188,5.4a4.77,4.77,0,0,1,4-1.8,5,5,0,0,1,4.1,1.8,8.48,8.48,0,0,1,1.4,5.2A7.47,7.47,0,0,1,196.1,15.9Z" transform="translate(0 -3.1)"/><path class="mobile_logo-cls-1" d="M221.5,17.4a3.84,3.84,0,0,1-2.2-.7,16.45,16.45,0,0,1-2.6-2.9c-1.4-1.8-2.3-2.9-2.9-3.2a5.23,5.23,0,0,0,3.1-1.3A3.36,3.36,0,0,0,218,6.9a3.23,3.23,0,0,0-.8-2.1,4.44,4.44,0,0,0-2.1-1.3,10.92,10.92,0,0,0-3.4-.4c-.8,0-1.9,0-3.3.1l-2.1.1v.5h.2a3.71,3.71,0,0,1,1.4.2.84.84,0,0,1,.4.7,11,11,0,0,1,.1,2.2V14a11.66,11.66,0,0,1-.1,2.3c-.1.3-.2.6-.5.7s-.7.2-1.3.2H206v.5h7v-.5h-.7a1.88,1.88,0,0,1-1.3-.3,1,1,0,0,1-.4-.8,11.62,11.62,0,0,1-.1-2.2V10.7h.6a2,2,0,0,1,.9.2,5.93,5.93,0,0,1,1,1.1,13.3,13.3,0,0,1,1.4,1.9,15.66,15.66,0,0,0,3.2,3.8h3.9v-.3Zm-9.3-7.1c-.6,0-1.1.1-1.7.1V3.7h.9q2.55,0,3.3.9a3.74,3.74,0,0,1,.8,2.5,6.05,6.05,0,0,1-.2,1.5,8.79,8.79,0,0,1-.6,1,8.8,8.8,0,0,1-1,.6C213.2,10.2,212.7,10.3,212.2,10.3Z" transform="translate(0 -3.1)"/><path class="mobile_logo-cls-1" d="M228.7,16.4a1.61,1.61,0,0,1-.4.7,2.21,2.21,0,0,1-1.4.3h-.3v.5h12l.3-4.5h-.5a6.47,6.47,0,0,1-1.1,2.5,3.13,3.13,0,0,1-1.4,1.2,5,5,0,0,1-1.9.3h-1c-1,0-1.6-.2-1.8-.5a8,8,0,0,1-.3-3V10.5h1.6a4.15,4.15,0,0,1,1.3.1,1,1,0,0,1,.6.5,5.14,5.14,0,0,1,.2,1.6h.5v-5h-.5a4.55,4.55,0,0,1-.1,1.4,1.7,1.7,0,0,1-.6.6,4.87,4.87,0,0,1-1.5.2h-1.5v-6h2a10.18,10.18,0,0,1,2.2.2,2,2,0,0,1,1.2.8,5.33,5.33,0,0,1,.8,2.2h.5l-.3-3.6H226.9V4a3.71,3.71,0,0,1,1.4.2.84.84,0,0,1,.4.7,11.62,11.62,0,0,1,.1,2.2v7.1A11,11,0,0,1,228.7,16.4Z" transform="translate(0 -3.1)"/><path class="mobile_logo-cls-1" d="M249.8,12.1v1.3H246v-.2h.1c.2,0,.3,0,.4-.1s.1-.1.1-.2V9.3a.35.35,0,0,0-.1-.2c-.1,0-.2-.1-.4-.1h2v.2H248c-.2,0-.4,0-.4.1s-.1.1-.1.2v3.6c0,.1.1.1.1.2a2,2,0,0,0,.5.1h.3c.3,0,.5,0,.6-.1s.3-.2.4-.3a3.39,3.39,0,0,0,.3-.8h.1Z" transform="translate(0 -3.1)"/><path class="mobile_logo-cls-1" d="M255.2,12.1v1.3h-3.8v-.2h.1c.2,0,.3,0,.4-.1s.1-.1.1-.2V9.3a.35.35,0,0,0-.1-.2c-.1,0-.2-.1-.4-.1h2v.2h-.2c-.2,0-.4,0-.4.1s-.1.1-.1.2v3.6c0,.1.1.1.1.2a2,2,0,0,0,.5.1h.3c.3,0,.5,0,.6-.1s.3-.2.4-.3a3.39,3.39,0,0,0,.3-.8h.2Z" transform="translate(0 -3.1)"/><path class="mobile_logo-cls-1" d="M258.1,11.3v1.6a.35.35,0,0,0,.1.2c.1.1.2.1.4.1h.1v.2h-2v-.2h.1c.2,0,.3,0,.4-.1s.1-.1.1-.2V9.3a.35.35,0,0,0-.1-.2c-.1,0-.2-.1-.4-.1h1.5a3.42,3.42,0,0,1,1.1.1,2.09,2.09,0,0,1,.6.4.84.84,0,0,1,.2.7,1.07,1.07,0,0,1-.2.6,1,1,0,0,1-.5.4,3.11,3.11,0,0,1-1.1.1Zm0-.1h.3c.3,0,.5,0,.6-.1a1.38,1.38,0,0,0,.4-.3,1.42,1.42,0,0,0,.2-.6,1,1,0,0,0-.3-.8,1.22,1.22,0,0,0-.9-.3h-.3v2.1Z" transform="translate(0 -3.1)"/></svg>
					
				</a>
				
			</div><!-- mobile_logo_wrapper -->
			
			
			
			
			<div class="header_right">
				
				<div class="header_right_inner">
				
					<span class="free_consultation">free consultations</span><!-- free_consultation -->
				
					<a class="tel" href="tel:(949) 870-3800">(949) 870-3800</a>
				
					<div class="menu_wrapper">
					
						<div class="menu_bar_wrapper">
					
							<div class="menu_bar"></div><!-- menu_bar -->
							<div class="menu_bar"></div><!-- menu_bar -->
							<div class="menu_bar"></div><!-- menu_bar -->
						
						</div><!--menu_bar_wrapper -->
					
						<span class="menu_verbiage">Menu</span><!-- menu_verbiage -->
					
					</div><!-- menu_wrapper -->
					
					</div><!-- header_right_inner -->
				
			</div><!-- header_right -->
			
			<div class="mobile_free_consultation">
				
				<span>Free Consultation</span>
				
			</div><!-- mobile_free_consultation -->
			
			
			<div class="header_right sticky_clone">
				
				<div class="header_right_inner">
				
					<span class="free_consultation">free consultations</span><!-- free_consultation -->
				
					<a class="tel" href="tel:(949) 870-3800">(949) 870-3800</a>
				
					<div class="menu_wrapper">
					
						<div class="menu_bar_wrapper">
					
							<div class="menu_bar"></div><!-- menu_bar -->
							<div class="menu_bar"></div><!-- menu_bar -->
							<div class="menu_bar"></div><!-- menu_bar -->
						
						</div><!--menu_bar_wrapper -->
					
						<span class="menu_verbiage">Menu</span><!-- menu_verbiage -->
					
					</div><!-- menu_wrapper -->
					
					</div><!-- header_right_inner -->
				
			</div><!-- header_right -->
			
			<div class="mobile_free_consultation sticky_clone">
				
				<span>Free Consultation</span>
				
			</div><!-- mobile_free_consultation -->
			
			
			
			
			
		</div><!-- inner_header -->
		
		<div class="nav_dropdown">
			
			<div class="nav_left">
			
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
			
			</div><!-- nav_left -->
			
			<div class="nav_right">
			
				<div class="nav_close nav_close_mobile">
				
					<span></span>
					<span></span>
				
				</div><!-- close -->
				
				<div class="sub_menu_container">
					
					
				</div><!-- sub_menu_container -->
			
			</div><!-- nav_right -->
			
		</div><!-- nav_dropdown -->
		
		
	</header>
	
	<div class="free_consultation_desktop">
		
		<img src="<?php bloginfo('template_directory');?>/images/chat.png"/>
	
		<div class="fc_verbiage_wrapper">
		
			<span class="fc_title">Free Consultation</span>
			
			<span class="fc_start">Start Here</span><!-- fc_title -->
		
		</div><!-- fc_verbiage_wrapper -->
			
	</div><!-- free_consultation_desktop -->
	
	<div class="free_consultation_tablet">
		
		<img src="<?php bloginfo('template_directory');?>/images/tablet-logo.png"/>
	
		<div class="fc_verbiage_wrapper">
		
			<span class="fc_title">start a free consultation here</span>
			
		</div><!-- fc_verbiage_wrapper -->
			
	</div><!-- free_consultation_desktop -->
	
	<div class="fc_form_overlay">
		
		<div class="overlay_form">
	
		<div class="inner_overlay_form">
			
			
			
				<div class="nav_close nav_close_desktop form_close">
				
					<span></span>
					<span></span>
				
				</div><!-- close -->
			
			
		
		
		<svg id="footer_svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 66 64.4"><defs><style>.cls-1{fill:#fff;}</style></defs><title>logo-ft-ico</title><path class="cls-1" d="M19.8,24.9a3,3,0,0,0,.8-2.3,4,4,0,0,0-.3-1.7,2.19,2.19,0,0,0-1-.9c-.8-.5-4.3-.3-5.3-.3h-.8v5.9h.4C15.1,25.7,19.1,25.7,19.8,24.9Z"/><path class="cls-1" d="M14,26.1h-.8v3.1a13.62,13.62,0,0,0,.1,2.5,1,1,0,0,0,.4.8,28.51,28.51,0,0,0,4.4.3,3.74,3.74,0,0,0,2.5-.8,3.29,3.29,0,0,0,.8-2.5,3.42,3.42,0,0,0-.9-2.6C19.5,26.1,15.5,26.1,14,26.1Z"/><path class="cls-1" d="M66,1.4h0V0H0V64.4l32.8-4.3L66,64.4V37.3h0ZM22.8,31.8a3.22,3.22,0,0,1-2,1.2,14.24,14.24,0,0,1-3.3.3H8.8v-.5h.5a2.87,2.87,0,0,0,1.2-.2.84.84,0,0,0,.4-.7,11,11,0,0,0,.1-2.2V22.9a11,11,0,0,0-.1-2.2c-.1-.3-.2-.6-.4-.7a3.71,3.71,0,0,0-1.4-.2H9v-.5l2.3-.1,5.8-.1q5.7,0,5.7,3.3a2.7,2.7,0,0,1-1,2.2,6.5,6.5,0,0,1-3,1.1,5.38,5.38,0,0,1,3.5,1.2,3.17,3.17,0,0,1,1.2,2.5A3.15,3.15,0,0,1,22.8,31.8Zm11.9-5.4a2,2,0,0,1,.3,1.1,2.8,2.8,0,0,1-3.1,2.7c-1.7,0-3.1-.9-3.1-2.3a2.1,2.1,0,0,1,1.8-2.2,1.61,1.61,0,0,1-.3-.9,1.51,1.51,0,0,1,1.6-1.6c1,0,1.5.6,1.5,1.2a.58.58,0,0,1-.6.6.54.54,0,0,1-.5-.5c0-.3.2-.6.7-.6h0a1.3,1.3,0,0,0-.9-.3c-.8,0-1.2.4-1.3,1.3a1.08,1.08,0,0,0,.2.8h.7a.43.43,0,0,1,.4.4c0,.2-.3.2-.5.2a.91.91,0,0,1-.7-.3,1.8,1.8,0,0,0-.9,1.6c0,1.1.6,2,2.3,2a2,2,0,0,0,2.2-2.1,3.55,3.55,0,0,0-.2-1c-1,.2-1.8.4-1.8,1.2,0,.1,0,.3.1.3h0a.46.46,0,0,1,.4-.5.43.43,0,0,1,.4.4.54.54,0,0,1-.5.5.81.81,0,0,1-.7-.9c0-1.1,1.1-1.4,2.2-1.8.8-.3,1.6-.7,1.6-1.7s-1.1-.8-1.1-.8h0c.3,0,.5.2.5.6a.54.54,0,0,1-.5.5.65.65,0,0,1-.6-.6.78.78,0,0,1,.8-.8,1.42,1.42,0,0,1,1.5,1.5C36.7,25.6,35.8,26.1,34.7,26.4Zm23.9-6.6h-.5a4.14,4.14,0,0,0-1.4.2.68.68,0,0,0-.4.6,10.45,10.45,0,0,0-.1,2.2v6.9a11.62,11.62,0,0,0,.1,2.2,2,2,0,0,0,.4.8A2.06,2.06,0,0,0,58,33h.6v.5H51.9V33h.5a2.87,2.87,0,0,0,1.2-.2.84.84,0,0,0,.4-.7,11,11,0,0,0,.1-2.2V21L48.5,33.6H48L42.4,21v8a12.89,12.89,0,0,0,.1,2.3,2.38,2.38,0,0,0,.6,1.1,2.46,2.46,0,0,0,1.5.5v.5h-5v-.5a2.46,2.46,0,0,0,1.5-.5,1.9,1.9,0,0,0,.7-1.1A6.56,6.56,0,0,0,42,29V22.9a11.62,11.62,0,0,0-.1-2.2,1.61,1.61,0,0,0-.4-.7,3.71,3.71,0,0,0-1.4-.2h-.4v-.5H44L49.2,31l5.1-11.6h4.3Z"/></svg>
		
		
		
		
		<span class="large_header">Every story is unique, start telling yours here </span>
		
		<div class="form_wrapper">
			
			<?php gravity_form(2, false, false, false, '', true, 12); ?>
			
			<span class="fields_required"><span class="form_bullet">&bull;</span> All Fields Required</span><!-- fields_required -->

		</div><!-- form_wrapper -->
		
		
	</div><!-- inner_overlay_form -->
	
	
</div><!-- overlay_form -->
		
		
	</div><!-- fc_form_overlay -->
	
	