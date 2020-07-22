<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package grandysoft
 */

get_header();
?>
    <main id="primary" class="site-main">
        <section class="banner with-bg">
            <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), '1200x1200' ); ?>" alt="bg" class="background">

            <div class="container">
                <div class="text-content">
                    <?php echo get_post()->post_content; ?>
                </div>
            </div>
        </section>

    </main><!-- #main -->
<?php
get_footer();
