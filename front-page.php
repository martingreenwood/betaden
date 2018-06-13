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
									<a href="" title="">
										<element>
											
										</element>
										Our Story
									</a>
								</li>
								<li>
									<a href="" title="">
										<element>
											
										</element>
										Events
									</a>
								</li>
								<li>
									<a href="" title="">
										<element>
											
										</element>
										Partners
									</a>
								</li>
								<li>
									<a href="" title="">
										<element>
											
										</element>
										Mentoring
									</a>
								</li>
								<li>
									<a href="" title="">
										<element>
											
										</element>
										Location
									</a>
								</li>
								<li>
									<a href="" title="">
										<element>
											
										</element>
										Apply
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
					<article class="">
						<?php the_field( 'section_three_content' ); ?>
					</article>
					<article class="">
						<?php the_field( 'section_two_content' ); ?>
					</article>
				</div>
			</div>
		</div>
	
	</div>

<?php
get_footer();
