<?php
/**
 * Template Name: Contact
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


	<div id="primary" class="content-area">

		<div class="content">
			<div class="container">
				<div class="row">
					<article class="columns two hide">
						&nbsp;
					</article>
					<article class="columns eight">
						<?php echo do_shortcode( '[gravityform id="2" title="false" description="false" ajax="true"]' ); ?>
					</article>
					<article class="columns two hide">
						&nbsp;
					</article>
				</div>
			<!-- </div> -->
		</div>
	
	</div>

<?php
get_footer();
