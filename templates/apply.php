<?php
/**
 * Template Name: Apply
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
							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'page' );

							endwhile; // End of the loop.
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
			
	</div>

	<div id="apply">

		<div class="content">
			<div class="table">
				<div class="cell middle">
					<div class="container">
						<div class="row">
							<?php echo do_shortcode( '[gravityform id="1" title="false" description="false"]' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
			
	</div>

<?php
get_footer();
