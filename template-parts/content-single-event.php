 <?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package betaden
 */

?>

<?php 
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

<article id="post-<?php the_ID(); ?>" <?php post_class('columns twelve'); ?>>

	<div class="thumb">
		<?php $blogImg = get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>
		<element style="background-image: url(<?php echo $blogImg; ?>);">
			
		</element>
	</div>

	<div class="entry-content">

		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<h3>
				<?php echo $event_date; ?> | <?php echo $start_time; ?> - <?php echo $end_time; ?>
			</h3>
		</header>

		<?php
			the_content();
		?>

	</div>

</article><!-- #post-<?php the_ID(); ?> -->
