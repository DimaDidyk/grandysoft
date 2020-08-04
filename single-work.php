<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package grandysoft
 */

get_header(); ?>

    <main id="primary" class="site-main singe-work">

        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <?php if( !empty(get_field('gallery')) ): ?>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?php foreach (get_field('gallery') as $gallery_item): ?>
                        <div class="swiper-slide">
                            <div class="slide-content">
                                <img src="<?php echo $gallery_item?>" alt="$gallery_item">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-white"></div>
            </div>
        <?php endif; ?>
        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper('.swiper-container', {
                pagination: {
                    el: '.swiper-pagination',
                    dynamicBullets: true,
                },
            });
        </script>

        <section class="container">
            <div class="description entry-content">
                <?php if( !empty(get_field('project_link')) ): ?>
                    <a href="<?php the_field('project_link'); ?>" class="project-url">Project URL</a>
                <?php endif; ?>
                <?php the_content(); ?>
            </div>
        </section>
    </main><!-- #main -->

<?php get_footer();
