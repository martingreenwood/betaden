<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package betaden
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<!-- <div class="container"> -->
				
				<div class="row">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'single-mentor' );

					endwhile; // End of the loop.
					?>
				</div>
			
			<!-- </div> -->
		</main><!-- #main -->
	</div><!-- #primary -->

	<div id="navs">

		<div class="content">
			<div class="table">
				<div class="cell middle">
					<!-- <div class="container"> -->
						<div class="row post-navigation">
							<div class="navi previous">
								<?php $prevPost = get_previous_post(); ?>
								<?php if ($prevPost): ?>
								<a href="<?php echo get_the_permalink( $prevPost->ID ); ?>" title="">
									<?php $prevImg = get_the_post_thumbnail_url( $prevPost->ID, 'full' ); ?>
									<element style="background-image: url(<?php echo $prevImg; ?>)"></element>
									<div class="info">
										<h3><?php echo $prevPost->post_title; ?></h3>
										<h4><?php the_field( 'company_name', $prevPost->ID ); ?></h4>
									</div>
								</a>
								<?php endif ?>
							</div><!--
						 --><div class="navi next">
								<?php $nextPost = get_next_post(); ?>
								<?php if ($nextPost): ?>
								<a href="<?php echo get_the_permalink( $nextPost->ID ); ?>" title="">
									<?php $nextImg = get_the_post_thumbnail_url( $nextPost->ID, 'full' ); ?>
									<element style="background-image: url(<?php echo $nextImg; ?>)"></element>
									<div class="info">
										<h3><?php echo $nextPost->post_title; ?></h3>
										<h4><?php the_field( 'company_name', $nextPost->ID ); ?></h4>
									</div>
								</a>
								<?php endif ?>
							</div>
						</div>
					<!-- </div> -->
				</div>
			</div>
		</div>
			
	</div>


	<div id="become">
		<?php $mentorspage = get_page_by_path( 'mentors' ); ?>
		<div class="content">
			<div class="table">
				<div class="cell middle">
					<!-- <div class="container"> -->
						<div class="row">
							<div class="columns four">
								&nbsp;
							</div>
							<div class="columns eight">
								<?php the_field( 'becoming_a_mentor_content', $mentorspage ); ?>
							</div>
						</div>
					<!-- </div> -->
				</div>
			</div>
		</div>
			
	</div>


<?php
get_footer();
