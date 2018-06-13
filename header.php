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

	<section id="apply" style="display: none;">
		<div class="table">
			<div class="cell middle">
				<div class="container">
					<div class="row">
						<?php the_custom_logo( ); ?>
						<?php echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true"]' ); ?>
						<a href="#" id="cancel" title="">Close</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">

				<div class="site-branding">
					<?php the_custom_logo( ); ?>
				</div>

				<?php
				/*
				<nav id="site-navigation" class="main-navigation">
					<button class="hamburger menu-toggle hamburger--spin" type="button" aria-controls="primary-menu" aria-expanded="false">
						<span class="hamburger-box ">
							<span class="hamburger-inner"></span>
						</span>
					</button>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						) );
					?>
				</nav>
				*/
				?>
			
			</div>
		</div>
	</header>

	<section id="banner">

		<div class="hero">
			
			<div class="table">
				<div class="cell middle">
					<div class="container">
						<div class="row">

							<div class="content">
								<h1>
									A DYNAMIC
									<br>LAUNCHPAD
									<br>for tech
									<br>entrepreneurs
								</h1>
								<a class="applylink" href="#apply" title="Apply online">Register Interest</a><br>
								<a href="//beta-den.com/wp/wp-content/uploads/2018/06/applicant-info.pdf" target="_blank" title="Download PDF">More Info</a>
							</div>

						</div>
					</div>	
				</div>
			</div>

		</div>

		<div class="tri">
			<img src="<?php echo get_stylesheet_directory_uri() .'/assets/img/zigzag.png'; ?>" alt="">
		</div>

	</section>

	<div id="content" class="site-content">
