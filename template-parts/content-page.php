<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package betaden
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('columns eight'); ?>>

	<div class="entry-content">
		<?php
			the_content();
		?>
	</div>

</article>
