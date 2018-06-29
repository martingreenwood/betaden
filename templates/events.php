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
				<div class="content container">
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
				<div class="container">
					<div class="row">
						<div class="columns twelve">
							<ul>
								<?php 
								$terms = get_terms(array(
									'taxonomy' => 'eventbrite_category',
									'hide_empty' => false,
								));
								?>
								<li><a href="#" data-tax="all" title="Show All">All Events</a></li>
								<?php foreach ($terms as $term): ?>
								<li><a href="#" data-tax="<?php echo $term->slug; ?>" title="Show <?php echo $term->name ?>"><?php echo $term->name; ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">
					<?php
						$args = array(
							'post_type'   		=> 'eventbrite_events',
							'posts_per_page' 	=> -1,
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
							<article class="event show" data-tax="<?php echo $cat->slug; ?>">

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
									<div class="element" style="background-image: url(<?php echo $blogImg; ?>);">
									</div>
								</div>

							</article>
							<?php
							endwhile;
							wp_reset_postdata();
							?>
					<?php endif; ?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<!-- </div> .container -->

<!-- <div> <?php // hack to make container end early ?> -->

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
