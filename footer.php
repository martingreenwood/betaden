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

	</div><!-- #content -->

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
							<li><a href="<?php echo home_url( 'privacy' ); ?>">Privacy Policy</a></li>
							<!-- <li><a href="<?php echo home_url( 'cookies' ); ?>">Cookies</a></li> -->
							<li><a class="applylink" href="#apply">Apply Online</a></li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
