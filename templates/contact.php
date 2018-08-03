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

	<div id="bios">

		<div class="content">
			<div class="container">
				<div class="row">
					<div class="person">
						<div class="pic">
							<div class="element" style="background-image: url(<?php the_field( 'bio_one_image' ); ?>");></div>
						</div><!--
						--><div class="bio">
							<h3><?php the_field( 'bio_one_name' ); ?></h3>
							<h4><?php the_field( 'bio_one_position' ); ?></h4>
							<?php the_field( 'bio_one' ); ?>
						</div>
					</div><!--
					--><div class="person">
						<div class="pic">
							<div class="element" style="background-image: url(<?php the_field( 'bio_two_image' ); ?>);"></div>
						</div><!--
						--><div class="bio">
							<h3><?php the_field( 'bio_two_name' ); ?></h3>
							<h4><?php the_field( 'bio_two_position' ); ?></h4>
							<?php the_field( 'bio_two' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
			
	</div>


	<div id="social">

		<div class="content">
			<div class="container">
				<div class="row">
					<ul>
						<li><a href="<?php the_field( 'twitter' ); ?>" target="_blank" rel="noopener" title=""><i class="fab fa-twitter"></i></a></li>
						<li><a href="<?php the_field( 'linkedin' ); ?>" target="_blank" rel="noopener"  title=""><i class="fab fa-linkedin-in"></i></a></li>
						<li><a href="<?php the_field( 'instagram' ); ?>" target="_blank" rel="noopener" title=""><i class="fab fa-instagram"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
			
	</div>


	<div id="primary" class="content-area">

		<div class="content">
			<div class="container">
				<div class="row">
					<article class="columns twelve">
						<?php echo do_shortcode( '[gravityform id="2" title="false" description="false" ajax="true"]' ); ?>
					</article>
				</div>
			<!-- </div> -->
		</div>
	
	</div>

	<div id="location">

		<div class="content">
			<div class="container">
				<div class="row">
					<div class="columns three">
						<h3>Visit Us</h3>
						<p><?php the_field( 'address' ); ?></p>
					</div>
					<div class="columns nine">
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
