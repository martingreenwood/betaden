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

	<?php if (get_field( 'cta_enable', 'options' )): ?>
	<div class="cta">
		<div class="container">
			<div class="row">
				<div class="title">
					<h2><?php the_field( 'cta_title', 'options' ); ?></h2>
				</div>
				<div class="offers">
					<ul><!--
					<?php
					if ( have_rows( 'infographic_points', 'options' ) ) :
						while ( have_rows( 'infographic_points', 'options' ) ) : the_row(); ?>
						--><li>
							<img src="<?php the_sub_field( 'image' ); ?>" role="presentation" alt="">
							<h4><?php the_sub_field( 'text' ); ?></h4>
						</li><!--
						<?php endwhile;
					endif;
					?>
					--></ul>
				</div>
			</div>
		</div>
	</div>
	<?php endif ?>

<?php
get_footer();
