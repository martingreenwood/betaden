<?php
/**
 * Template part for displaying event content in archive-tc_events.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package betaden
 */

?>

<article id="event event-<?php the_ID(); ?>" <?php post_class('row'); ?>>

	<?php 
	$eventBG = get_the_post_thumbnail_url( get_the_ID(), 'full' );
	?>
	<div class="image" style="background-image: url(<?php echo $eventBG; ?>);">
	</div>
	<div class="entry-content">
		<?php print_r($post) ?>
	</div>

</article>
