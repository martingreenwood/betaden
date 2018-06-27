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

	<div class="alert">
		<div class="box">
			<h3>Lorem Ipsum</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
			<a href="<?php echo home_url( '/apply' ); ?>" title="Apply online">Apply Now</a>
			<a href="<?php echo home_url( '/our-story' ); ?>" title="More Info">More Info</a>
		</div>
	</div>

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
						<div class="row">
							<ul class="quicklinks">
								<li>
									<a href="<?php echo home_url( 'our-story' ); ?>" title="">
										<element>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/story-hex.png" alt="">
										</element>
										<span>Our Story</span>
									</a>
								</li>
								<li>
									<a href="<?php echo home_url( 'events' ); ?>" title="">
										<element>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/events-hex.png" alt="">
										</element>
										<span>Events</span>
									</a>
								</li>
								<li>
									<a href="<?php echo home_url( 'mentoring' ); ?>" title="">
										<element>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/mentoring-hex.png" alt="">
										</element>
										<span>Mentoring</span>
									</a>
								</li>
								<li>
									<a href="<?php echo home_url( 'location' ); ?>" title="">
										<element>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/location-hex.png" alt="">
										</element>
										<span>Location</span>
									</a>
								</li>
								<li>
									<a href="<?php echo home_url( 'apply' ); ?>" title="">
										<element>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/Hexagon1.png" alt="">
										</element>
										<span>Apply</span>
									</a>
								</li>
							</ul>
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
					<article class="columns five hide">
						&nbsp;
					</article>
					<article class="columns seven">
						<?php the_field( 'section_two_content' ); ?>
					</article>
				</div>
			</div>
		</div>
	
	</div>

	<div id="partners" class="content-area">

		<div class="content">
			<div class="container">
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
					$args = array(
						'post_type'   		=> 'eventbrite_events',
						'posts_per_page' 	=> 1,
						'order' 			=> 'ASC',
						'meta_key' 			=> 'start_ts',
					);

					$testimonials = new WP_Query( $args );
					if( $testimonials->have_posts() ) :
					?>
					<?php
					while( $testimonials->have_posts() ) : $testimonials->the_post();
						
						$event_id = get_the_ID();
						$start_date_str = get_post_meta( $event_id, 'start_ts', true );
						$end_date_str = get_post_meta( $event_id, 'end_ts', true );
						$start_date_formated = date_i18n( 'F j Y', $start_date_str );
						$end_date_formated = date_i18n( 'F j Y', $end_date_str );
						$start_time = date_i18n( 'h:i a', $start_date_str );
						$end_time = date_i18n( 'h:i a', $end_date_str );
						$website = get_post_meta( $event_id, 'iee_event_link', true );

						if ($start_date_formated == $end_date_formated) {
							$event_date = $end_date_formated;
						} else {
							$event_date = $start_date_formated ." - ". $end_date_formated;
						}

						$cat = get_the_terms( $event_id, 'eventbrite_category' );
						$cat = current($cat);
						
					?>
					<div class="event show" data-tax="<?php echo $cat->slug; ?>">

						<div class="entry-content">
							<h1 class="entry-title">
								<a href="<?php the_permalink( ) ?>">
								<?php the_title(); ?>
								</a>
							</h1>
							<h3>
								<?php echo $event_date; ?> | <?php echo $start_time; ?> - <?php echo $end_time; ?>
							</h3>
							<p><?php 
							$content = get_the_content();
							echo wp_trim_words( $content , '40' ); 
							?></p>
							<p><a class="more" target="_blank" href="<?php echo $website; //the_permalink(); ?>" title="Read More">View Event</a></p>
						</div><!--
						--><div class="thumb">
							<?php $blogImg = get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>
							<element style="background-image: url(<?php echo $blogImg; ?>);">
							</element>
						</div>

					</div>
					<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>
				</div>
			</div>
		</div>
	
	</div>

	<div id="tweet">
		<div class="content">
			<div class="table">
				<div class="cell middle">
					<div class="container">
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
					</div>
				</div>
			</div>
		</div>			
	</div>

<?php
get_footer();
