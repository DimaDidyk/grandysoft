<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package grandysoft
 */

get_header(); ?>

    <main id="primary" class="site-main">

        <section class="banner with-bg">
            <?php if( !empty(get_the_post_thumbnail_url(get_the_ID()))): ?>
                <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), '1200x1200' ); ?>" alt="bg" class="background">
            <?php endif; ?>
            <div class="container">
                <div class="text-content">
                    <h1 class="section-title without-line"><?php the_title(); ?> Works</h1>
                </div>
            </div>
        </section>

        <?php  ?>
        <div class="container">
            <?php while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', get_post_type() );
                //			if ( comments_open() || get_comments_number() ) :
                //				comments_template();
                //			endif;
            endwhile; // End of the loop. ?>
        </div>
    </main><!-- #main -->

<?php get_footer();
