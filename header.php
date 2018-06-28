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

	<div class="alert">
		<div class="box">
			<div class="content">
				<h3>Registration Open</h3>
				<p>The first cohort is launching this September. Register you interest TODAY.</p>
				<a href="<?php echo home_url( '/apply' ); ?>" title="Apply online">Apply Now</a>
				<a href="#" class="close" title="Close">Close</a>
			</div>
		</div>
	</div>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">

				<div class="site-branding">
					<?php the_custom_logo( ); ?>
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
								<?php else: ?>
									<a href="<?php echo home_url( '/apply' ); ?>" title="Apply online">Apply Now</a><br>
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
