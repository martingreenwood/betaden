<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package betaden
 */

get_header(); ?>

	<div id="intro">

		<div class="content">
			<div class="table">
				<div class="cell middle">
					<!-- <div class="container"> -->
						<div class="row">
							<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'page' );

							endwhile; // End of the loop.
							?>
						</div>
						<div class="row">
							<ul class="quicklinks">
								<li>
									<a href="<?php echo home_url( 'our-story' ); ?>" title="">
										<element style="background-image: url( <?php echo get_stylesheet_directory_uri(); ?>/assets/img/tech.jpg);"></element>
										<span>Our Story</span>
									</a>
								</li>
								<li>
									<a href="<?php echo home_url( 'events' ); ?>" title="">
										<element style="background-image: url( <?php echo get_stylesheet_directory_uri(); ?>/assets/img/tech.jpg);"></element>
										<span>Events</span>
									</a>
								</li>
								<li>
									<a href="<?php echo home_url( 'partners' ); ?>" title="">
										<element style="background-image: url( <?php echo get_stylesheet_directory_uri(); ?>/assets/img/tech.jpg);"></element>
										<span>Partners</span>
									</a>
								</li>
								<li>
									<a href="<?php echo home_url( 'mentoring' ); ?>" title="">
										<element style="background-image: url( <?php echo get_stylesheet_directory_uri(); ?>/assets/img/tech.jpg);"></element>
										<span>Mentoring</span>
									</a>
								</li>
								<li>
									<a href="<?php echo home_url( 'location' ); ?>" title="">
										<element style="background-image: url( <?php echo get_stylesheet_directory_uri(); ?>/assets/img/tech.jpg);"></element>
										<span>Location</span>
									</a>
								</li>
								<li>
									<a href="<?php echo home_url( 'apply' ); ?>" title="">
										<element style="background-image: url( <?php echo get_stylesheet_directory_uri(); ?>/assets/img/tech.jpg);"></element>
										<span>Apply</span>
									</a>
								</li>
							</ul>
						</div>
					<!-- </div> -->
				</div>
			</div>
		</div>
			
	</div>

	<div id="primary" class="content-area">

		<div class="content">
			<!-- <div class="container"> -->
				<div class="row">
					<article class="columns five hide">
						&nbsp;
					</article>
					<article class="columns seven">
						<?php the_field( 'section_two_content' ); ?>
					</article>
				</div>
			<!-- </div> -->
		</div>
	
	</div>

	<div id="partners" class="content-area">

		<div class="content">
			<!-- <div class="container"> -->
				<div class="row">
					<div class="columns two">
						&nbsp;
					</div>
					<article class="columns eight">
						<?php the_field( 'section_three_content' ); ?>
					</article>
					<div class="columns two">
						&nbsp;
					</div>
				</div>
				<div class="row">
					<?php 
					$images = get_field('partners', 'options');
					$size = 'full';
					if( $images ): ?>
					<ul>
						<?php foreach( $images as $image ): ?>
						<li>
							<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
						</li>
						<?php endforeach; ?>
					</ul>
					<?php endif; ?>
				</div>
			<!-- </div> -->
		</div>
	
	</div>

	<div id="tweet">
		<div class="content">
			<div class="table">
				<div class="cell middle">
					<!-- <div class="container"> -->
						<div class="row">
							<div class="columns two">
								<a href="https://twitter.com/BetaDenUK" target="_blank">
									<i class="fab fa-twitter"></i>
								</a>
							</div>
							<article class="columns ten">
								<?php get_template_part( 'template-parts/get', 'tweets' ); ?>
							</article>
						</div>
					<!-- </div> -->
				</div>
			</div>
		</div>			
	</div>

<?php
get_footer();
