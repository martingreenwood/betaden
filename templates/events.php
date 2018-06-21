<?php
/**
 * Template Name: Events
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package betaden
 */

get_header(); ?>

	<div id="intro">
		<div class="table">
			<div class="cell middle">
				<div class="content">
					<div class="row">
						<?php
							if ( have_posts() ) : while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'page' );

							endwhile; endif; 
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="filter">
		<div class="table">
			<div class="cell middle">
				<!-- <div class="container"> -->
					<div class="row">
						<div class="columns twelve">
							<ul>
								<li><a href="#all" class="all" title="Show All">All Events</a></li>
								<li><a href="#all" class="all" title="Show All">Open Events</a></li>
								<li><a href="#all" class="all" title="Show All">Invitation Only</a></li>
							</ul>
						</div>
					</div>
				<!-- </div> -->
			</div>
		</div>
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			

		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- .container -->

<div> <?php // hack to make container end early ?>
	<div id="getinvolved">
		<div class="table">
			<div class="cell middle">
				<div class="container">
					<div class="row">
						<div class="content columns eight">
							<?php the_field( 'section_two_content' ); ?>
							<ul>
								<li><a href="<?php echo home_url( '/our-story' ); ?>" title="More Info">Find Out More</a></li>
								<li><a href="<?php echo home_url( '/apply' ); ?>" title="Apply online">Apply Now</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php
get_footer();
