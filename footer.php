<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package betaden
 */

?>

		</div><!-- .conmtainer -->
	</div><!-- #content -->

	<div class="signmeupman" style="display: none;">
		<div class="container">
			<div class="row">
				<h3>Sign up for BetaDen updates</h3>
				<?php echo do_shortcode( '[gravityform id="3" title="false" description="false" ajax="true"]' ); ?>
			</div>
		</div>
	</div>

	<footer id="colophon" class="site-footer">
		
		<div class="footer">
			<div class="container">
				<div class="row">

					<div class="copyright">
						<?php the_custom_logo( ); ?>
					</div>
					<div class="copyright">
						<ul>
							<li>&copy; BetaDen <?php echo date('Y') ?>. All rights reserved</li>
						</ul>
						<?php 
						wp_nav_menu( array(
							'theme_location'  => 'menu-2',
							'menu'            => '',
							'container'       => '',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'menu',
							'menu_id'         => 'footer-menu',
						) );; ?>
					</div>

				</div>
			</div>
		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
