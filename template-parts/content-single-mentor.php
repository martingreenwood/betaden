 <?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package betaden
 */

?>

<article id="mentor mentor-<?php the_ID(); ?>" <?php post_class(''); ?>>
	
	<div class="entry-header columns four">&nbsp;
		<?php $img = get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>
		<element style="background-image: url(<?php echo $img; ?>)"></element>
		<?php if (get_field( 'twitter' ) || get_field( 'linkedin' ) || get_field( 'instagram' )): ?>
		<ul>
			<?php if (get_field( 'twitter' )): ?>
				<li><a href="<?php the_field( 'twitter' ); ?>" title=""><i class="fab fa-twitter"></i></a></li>	
			<?php endif ?>
			<?php if (get_field( 'linkedin' )): ?>
				<li><a href="<?php the_field( 'linkedin' ); ?>" title=""><i class="fab fa-linkedin-in"></i></a></li>
			<?php endif ?>
			<?php if (get_field( 'instagram' )): ?>
				<li><a href="<?php the_field( 'instagram' ); ?>" title=""><i class="fab fa-instagram"></i></a></li>
			<?php endif ?>
		</ul>
		<?php endif ?>
		<?php if (get_field( 'website' )): ?>
			<a href="<?php the_field( 'website' ); ?>" title=""><?php the_field( 'website' ); ?></a>
		<?php endif ?>
	</div>

	<div class="entry-content columns eight">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<h2><?php the_field( 'betaden_position' ); ?></h2>
		<?php the_content(); ?>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
