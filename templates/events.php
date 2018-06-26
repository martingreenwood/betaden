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

			<?php
				// Set up and call our Eventbrite query.
				$events = new Eventbrite_Query( apply_filters( 'eventbrite_query_args', array(
					'display_private' => true, // boolean
					// 'status' => 'live',         // string (only available for display_private true)
					// 'nopaging' => false,        // boolean
					// 'limit' => null,            // integer
					// 'organizer_id' => null,     // integer
					// 'p' => null,                // integer
					// 'post__not_in' => null,     // array of integers
					// 'venue_id' => null,         // integer
					// 'category_id' => null,      // integer
					// 'subcategory_id' => null,   // integer
					// 'format_id' => null,        // integer
				) ) );

				if ( $events->have_posts() ) :
					while ( $events->have_posts() ) : $events->the_post(); ?>

						<article id="event">

							<div class="entry-content">
								<h1 class="entry-title">
									<a href="<?php the_permalink( ) ?>">
									<?php the_title(); ?>
									</a>
								</h1>
								<h3><?php eventbrite_event_meta(); ?></h3>
								<p><?php 
								$content = get_the_content();
								echo wp_trim_words( $content , '40' ); 
								?></p>
								<p><a class="more" href="<?php the_permalink( ) ?>" title="Read More">Read More</a></p>
							</div><!--
							--><div class="thumb">
								<?php $blogImg = get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>
								<?php $img = get_the_post_thumbnail(  ); ?>
								<?php $img = explode('"', $img) ?>
								<element style="background-image: url(<?php echo $img[5]; ?>);">
									
								</element>
							</div>

						</article><!-- #post-<?php the_ID(); ?> -->


					<?php endwhile;

					// Previous/next post navigation.
					eventbrite_paging_nav( $events );

				else :
					// If no content, include the "No posts found" template.
					get_template_part( 'content', 'none' );

				endif;

				// Return $post to its rightful owner.
				wp_reset_postdata();
			?>

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
