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

	<div class="entry-content">
        <a href="<?php the_permalink(); ?>">
            <h3><?php the_title(); ?></h3>
        </a>
        <div class="excerpt">
            <?php the_excerpt(); ?>
        </div>
        <div class="meta-content">
            <div class="author"><?php the_author(); ?></div>

        </div>
        <a href="<?php the_permalink(); ?>">
            <div class="btn btn-inverse">Learn more</div>
        </a>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
