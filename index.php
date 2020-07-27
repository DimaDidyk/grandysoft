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

get_header();
?>
	<main id="primary" class="site-main">

        <section id="blog-banner">
            <div class="container">
                <h2>blog</h2>
            </div>
        </section>

        <div class="container">
            <?php if ( have_posts() ) :
                /* Start the Loop */
                while ( have_posts() ) :
                    the_post();
                    get_template_part( 'template-parts/content', get_post_type() );
                endwhile;
                the_posts_navigation();
            else :
                get_template_part( 'template-parts/content', 'none' );
            endif;?>

        </div>
	</main><!-- #main -->
<?php
get_footer();
