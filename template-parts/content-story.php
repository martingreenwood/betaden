<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package betaden
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content columns six">
		<?php
			the_content();
		?>
	</div>

	<div class="entry-image columns six">
		<?php the_post_thumbnail( ); ?>
	</div>

</article>
