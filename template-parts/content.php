<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package betaden
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<h1 class="entry-title">
			<a href="<?php the_permalink( ) ?>">
			<?php the_title(); ?>
			</a>
		</h1>
		<p><?php 
		$content = get_the_content();
		echo wp_trim_words( $content , '40' ); 
		?></p>
		<p><a class="more" href="<?php the_permalink( ) ?>" title="Read More">Read More</a></p>
	</div><!--
	<?php $blogImg = get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>
	--><div class="thumb">
		<element style="background-image: url(<?php echo $blogImg; ?>);"></element>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
