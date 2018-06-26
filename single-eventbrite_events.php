<?php
/**
 * The template for displaying all single eventbrite_events
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package betaden
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">			
			<div class="container">
				<div class="row">
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'single-event' );

				endwhile; // End of the loop.
				?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
