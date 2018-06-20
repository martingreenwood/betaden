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

	<div id="apply">

		<div class="content">
			<div class="table">
				<div class="cell middle">
					<div>
					<!-- <div class="container"> -->
						<div class="row">
							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'apply' );

							endwhile; // End of the loop.
							?>
							<?php echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="true"]' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

<?php
get_footer();
