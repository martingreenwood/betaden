<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package betaden
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class($pagename); ?>>
<div id="page" class="site">

	<?php if (is_front_page()): ?>
	<div class="alert">
		<div class="box">
			<div class="content">
				<h3>BetaDen UK has now officially launched!</h3>
				<p>Applications are open and we can’t wait to hear from you, the deadline for applications is <strong>Friday 17th August 2018</strong> ready to launch our first ever cohort this autumn.</p>
				<a href="<?php echo home_url( '/apply' ); ?>" title="Apply online">Apply Now</a>
				<a href="#" class="close" title="Close">Close</a>
			</div>
		</div>
	</div>
	<?php endif ?>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">

				<div class="site-branding">
					<a href="<?php echo home_url( ); ?>" title="BetaDen UK">
						<svg version="1.1" id="fab35c55-512d-4167-b023-e4fb8e869a04" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 778 171.5" style="enable-background:new 0 0 778 171.5;" xml:space="preserve"><style type="text/css">.st0{fill:#fff;}</style><title>Artboard 1</title><path class="st0" d="M255.2,83.9c6.4-3.4,12.3-8.9,12.3-19.3v-0.3c0.1-5.4-2-10.5-5.8-14.3c-4.9-5-12.7-7.7-22.6-7.7h-31.2
	c-4.1-0.1-7.5,3.3-7.6,7.4c0,0.1,0,0.2,0,0.3v71.2c-0.1,4.2,3.3,7.6,7.5,7.7c0,0,0.1,0,0.1,0h32.4c19.3,0,32-8.3,32-23.8v-0.2
	C272.3,93.1,265.3,87.3,255.2,83.9z M215.2,55.8h21.9c9.8,0,15.2,4.2,15.2,11V67c0,8-6.5,11.8-16.3,11.8h-20.8L215.2,55.8z
	 M257.1,103.5c0,7.8-6.3,11.9-16.7,11.9h-25.2V91.6h24.1c12,0,17.8,4.4,17.8,11.7L257.1,103.5z"/><path class="st0" d="M343.3,55.9c3.8,0,6.8-3,6.8-6.8c0-3.8-3-6.8-6.8-6.8H293c-4.1-0.1-7.5,3.3-7.6,7.4c0,0.1,0,0.2,0,0.3v5.8h57.9
	V55.9z"/><path class="st0" d="M344.6,85.3c0-3.8-3-6.8-6.8-6.9h-52.4V92h52.4C341.5,92,344.5,89,344.6,85.3z"/><path class="st0" d="M344,115.3h-58.6v5.8c-0.1,4.2,3.3,7.6,7.5,7.7c0,0,0.1,0,0.1,0h51c3.8,0,6.8-3,6.8-6.8c0-3.8-3-6.8-6.8-6.8
	V115.3z"/><path class="st0" d="M424.7,42.3h-57.5c-3.9,0.5-6.7,4-6.2,7.9c0.4,3.3,3,5.8,6.2,6.2h21.1v65.5c0,4.2,3.4,7.6,7.6,7.6l0,0
	c4.2,0,7.6-3.4,7.7-7.6V56.4h21.1c3.9-0.5,6.7-4,6.2-7.9C430.5,45.3,428,42.7,424.7,42.3L424.7,42.3z"/><path class="st0" d="M769.1,41.7c-4.1,0-7.4,3.3-7.4,7.4v0v53.2l-43.3-56c-2.1-2.6-4.2-4.5-7.9-4.5h-1.6c-4.3,0-7.7,3.4-7.7,7.7v0
	v72.6c0.1,4.1,3.5,7.4,7.6,7.4c4.1,0,7.4-3.3,7.4-7.4c0,0,0,0,0,0V67.2l44.5,57.6c2.1,2.7,4.3,4.6,7.9,4.6h0.6
	c4.1,0.1,7.4-3.2,7.5-7.3c0-0.1,0-0.2,0-0.3V49.1C776.6,45,773.2,41.6,769.1,41.7C769.1,41.7,769.1,41.7,769.1,41.7z"/><path class="st0" d="M679.1,55.9c3.8,0,6.8-3,6.8-6.8c0-3.8-3-6.8-6.8-6.8h-50.3c-4.1-0.1-7.5,3.3-7.6,7.4c0,0.1,0,0.2,0,0.3v5.8
	h57.9L679.1,55.9z"/><path class="st0" d="M679.8,115.3h-58.6v5.8c-0.1,4.2,3.3,7.6,7.5,7.7c0,0,0.1,0,0.1,0h51c3.8,0,6.8-3,6.8-6.8c0-3.8-3-6.8-6.8-6.8
	V115.3z"/><path class="st0" d="M680.4,85.3c0-3.8-3-6.8-6.8-6.9h-52.4V92h52.4C677.3,92,680.3,89,680.4,85.3z"/><path class="st0" d="M561.1,41.9h-24.6c-4.2-0.1-7.6,3.3-7.7,7.5c0,0.1,0,0.1,0,0.2v6.2h32.3c18.2,0,30,12.5,30,29.4v0.3
	c0,16.9-11.8,29.1-30,29.1H544V77.2c0-4.2-3.4-7.6-7.6-7.6c-4.2,0-7.6,3.4-7.6,7.6v43.6c-0.1,4.2,3.3,7.6,7.5,7.7c0.1,0,0.1,0,0.2,0
	h24.6c27.2,0,46-18.9,46-43.3V85C607.1,60.6,588.3,41.9,561.1,41.9z"/><path class="st0" d="M506,114.8h-57.7l23.3-50.6l14.8,32.1c1.7,3.6,5.9,5.2,9.5,3.5s5.2-5.9,3.5-9.5L480,47.8
	c-3-6.5-13.7-6.5-16.7,0l-31.5,68.5c-1.3,2.8-1.1,6.1,0.6,8.7c1.7,2.7,4.6,4.3,7.7,4.3H506c4-0.5,6.9-4.1,6.4-8.1
	C512,117.8,509.4,115.2,506,114.8z"/><path class="st0" d="M145.9,40.6L79.1,2c-2.3-1.3-5.1-1.3-7.4,0L4.9,40.6c-2.3,1.3-3.7,3.8-3.7,6.4v77.2c0,2.6,1.4,5,3.7,6.3
	l66.8,38.6c1.1,0.7,2.4,1,3.7,1c1.3,0,2.6-0.3,3.7-1l66.8-38.6c2.3-1.3,3.7-3.7,3.7-6.3V47C149.6,44.4,148.2,41.9,145.9,40.6z
	 M134.9,51.2V120l-52.2,30.1v-129L134.9,51.2z M68.1,92.9v57.2L15.9,120V92.9L68.1,92.9z M68.1,21.1v57.2H15.9V51.2L68.1,21.1z"/></svg>
					</a>
				</div>

				<nav id="site-navigation" class="main-navigation">
					<button class="hamburger menu-toggle hamburger--squeeze" type="button" aria-controls="menu-wrap" aria-expanded="false">
						<span class="hamburger-box ">
							<span class="hamburger-inner"></span>
						</span>
					</button>
					<div class="menu-wrap">
						<div class="table">
							<div class="cell middle">
								<div class="logo">
									<?php the_custom_logo( ); ?>
								</div>
								<?php
								wp_nav_menu( array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								) );
								?>
							</div>
						</div>
					</div>
				</nav>
			
			</div>
		</div>
	</header>

	<?php 
	if (is_home()):
		$bannerBG = get_field( 'banner_background_image', get_option( 'page_for_posts' ) );
	else:
		if ( get_field( 'banner_background_image', get_the_ID() ) ):
			$bannerBG = get_field( 'banner_background_image', get_the_ID() );
		else:
			$bannerBG = get_stylesheet_directory_uri() . '/assets/img/bg-clouds.jpg';

		endif;
	endif;
	?>

	<section id="banner">

		<div class="hero" style="background-image: url(<?php echo $bannerBG; ?>)">
			
			<div class="table">
				<div class="cell middle">
					<div class="container">
						<div class="row">

							<div class="content">
								<?php if (is_home()): ?>
									<h1><?php the_field( 'banner_text', get_option( 'page_for_posts' ) ); ?></h1>
								<?php else: ?>
									<?php if (get_field( 'banner_text', get_the_ID() )): ?>
										<h1><?php the_field( 'banner_text', get_the_ID() ); ?></h1>
									<?php else: ?>
										<h1>INFORMED<br>ADVICE & <br>DIRECTION</h1>
									<?php endif; ?>
								<?php endif; ?>

								<?php if ( is_front_page() ): ?>
									<a href="<?php echo home_url( '/apply' ); ?>" title="Apply online">Apply Now</a><br>
									<a href="<?php echo home_url( '/our-story' ); ?>" title="More Info">More Info</a>
								<?php endif; ?>
							</div>

						 </div>
					</div>	
				</div>
			</div>

		</div>

		

	</section>

	<div id="content" class="site-content">

		<div class="tri"></div>
		<div class="tri2"></div>
		<div class="hex">
		 	<?php 
		 	if (is_home()):
		 		$hexIMG = get_field( 'banner_hex', get_option( 'page_for_posts' ) );
	 		else:
				if (get_field( 'banner_hex', get_the_ID() )):
					$hexIMG = get_field( 'banner_hex', get_the_ID() );
				else:
					$hexIMG = get_template_directory_uri() . '/assets/img/hexagon-header.png';
				endif;
			endif;
			?>
			<img src="<?php echo $hexIMG; ?>" alt="">
		</div>

		<div class="main-container">
