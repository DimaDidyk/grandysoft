<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package grandysoft
 */

get_header(); ?>
	<main id="primary" class="site-main">

        <section class="banner with-bg">
            <?php if( !empty(get_the_post_thumbnail_url( get_option( 'page_for_posts' ) ))): ?>
                <img src="<?php echo get_the_post_thumbnail_url( get_option( 'page_for_posts' ), '1200x1200' ); ?>" alt="bg" class="background">
            <?php endif; ?>
            <div class="container">
                <div class="text-content">
                    <h1 class="section-title without-line">
                        <?php echo get_the_title(get_option( 'page_for_posts' )); ?>
                        <?php if( !empty(single_term_title( $prefix = '', $display = false)) ){ single_term_title( $prefix = ' - ', $display = true ); } ?>
                    </h1>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="blog-posts">
                <?php if ( have_posts() ) :
                    /* Start the Loop */
                    while ( have_posts() ) :
                        the_post();
                        get_template_part( 'template-parts/content' );
                    endwhile;
                    the_posts_navigation();
                else :
                    get_template_part( 'template-parts/content', 'none' );
                endif;?>
            </div>
        </div>
	</main><!-- #main -->
<?php
get_footer();
