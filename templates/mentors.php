<?php
/**
 * Template Name: Mentors
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

	<div id="thementors">

		<div class="content">
			<div class="table">
				<div class="cell middle">
					<div class="container">
						<div class="row"><!--
							<?php
							$args = array(
								'post_type' 		=> 'mentors',
								'order' 			=> 'ASC',
								'orderby' 			=> 'Name',
								'posts_per_page' 	=> 8,
								'paged' 			=> get_query_var( 'paged' ),
							);
							
							$query = new WP_Query( $args );

							while ( $query->have_posts() ) : $query->the_post(); 
								$img = get_the_post_thumbnail_url( get_the_ID(), 'full' );
								?>
								--><div class="mentor">
									<a href="<?php the_permalink(); ?>" title="">
										<div class="avatar" style="background-image: url(<?php echo $img; ?>);"></div>
										<h3><?php the_title(); ?></h3>
										<h4><?php the_field( 'company_name' ); ?></h4>
									</a>
								</div><!--
								<?php 
							endwhile;

							wp_reset_postdata();
							?>
						--></div>
					</div>
				</div>
			</div>
		</div>
			
	</div>

	<div id="become">

		<div class="content">
			<div class="table">
				<div class="cell middle">
					<div class="container">
						<div class="row">
							<div class="columns four">
								&nbsp;
							</div>
							<div class="columns eight">
								<?php the_field( 'becoming_a_mentor_content' ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			
	</div>

	<div class="cta">
		<div class="container">
			<div class="row">
				<div class="title">
					<h2>WHAT'S ON OFFER WITH BETADEN</h2>
				</div>
				<div class="offers">
					<ul>
						<li>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/15k-icon.png" alt="">
							<h4>Proof of Concept Grant<br>
							(up to £15k)</h4>
						</li><!--
						--><li>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/office-icon.png" alt="">
							<h4>Free Office Space</h4>
						</li><!--
						--><li>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/mentor-icon.png" alt="">
							<h4>Mentoring from our
							<br>range of experts </h4>
						</li><!--
						--><li>
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/5G-icon.png" alt="">
							<h4>Access to Worcestershire's<br>
							5G Testbed</h4>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

<?php
get_footer();
