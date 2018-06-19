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

<?php
get_footer();
