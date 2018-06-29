ƒ<?php
/**
 * Template Name: Location
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package betaden
 */

get_header(); 

?>

	<div id="intro">

		<div class="content">
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

	<div id="location">

		<div class="content">
			<div class="container">
				<div class="row">
					<div class="columns twelve">
						<?php $location = get_field('location');
						if( !empty($location) ):
						?>
						<div class="map">
							<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
			
	</div>

<?php
get_footer();
