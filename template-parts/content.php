<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package grandysoft
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) :
			?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php grandysoft_post_thumbnail(); ?>

	<div class="entry-content">

	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
