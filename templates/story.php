<?php
/**
 * Template name: Story
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package betaden
 */

get_header(); 

?>

	<div id="intro">

		<div class="content">
			<div class="table">
				<div class="cell middle">
					<div class="container">
						<div class="row">
							<h1><?php the_title(); ?></h1>
						</div>
						<div class="row">
							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'story' );

							endwhile; // End of the loop.
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
			
	</div>

	<div class="cta">
		<div class="container">
			<div class="row">
				<div class="title">
					<h2>WHAT'S ON OFFER WITH BETADEN</h2>
				</div>
				<div class="offers">
					<ul>
						<li>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/15k-icon.png" alt="">
							<h4>Proof of Concept Grant<br>
							(up to £15k)</h4>
						</li><!--
						--><li>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/office-icon.png" alt="">
							<h4>Free Office Space</h4>
						</li><!--
						--><li>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mentor-icon.png" alt="">
							<h4>Mentoring from our
							<br>range of experts </h4>
						</li><!--
						--><li>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/5G-icon.png" alt="">
							<h4>Access to Worcestershire's<br>
							5G Testbed</h4>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

<?php
get_footer();
