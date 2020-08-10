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
            <div class="author">Author:
                <?php echo get_the_author_link(); ?>
            </div>
            <div class="post-categories">
                Categories:
                <?php foreach (wp_get_post_categories(get_the_ID(), array('fields' => 'all')) as $category): ?>
                    <a href="<?php echo get_term_link( $category ); ?>" lass="category"><?php echo $category->name; ?></a>
                <?php endforeach; ?>
            </div>
        </div>
        <a href="<?php the_permalink(); ?>">
            <div class="btn btn-inverse">Learn more</div>
        </a>
	</div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
