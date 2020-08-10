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
        <div class="portfolio-banner">
            <div class="left-side">
                <div class="left-side-content">
                    <div class="portfolio-description">
                        <h1><?php the_title(); ?></h1>
                        <div class="line"></div>
                        <div class="portfolio-meta">
                           <?php the_content(); ?>
                           <?php if( !empty(get_field('project_link')) ): ?>
                               <a href="<?php the_field('project_link'); ?>" class="project-urll"><?php the_field('project_link'); ?></a>
                           <?php endif; ?>
                        </div>
                    </div>
                    <div class="message-for-video">
                        <img src="<?php echo get_template_directory_uri(). '/src/images/mouse-down2.png'; ?>"
                             alt="mouse down"
                             class="mouse-down"
                        >
                        <p>Scroll Down to get video</p>

                    </div>
                </div>
            </div>

            <div class="right-side">
                <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), '1200x1200' ); ?>" alt="bg" class="background">
                <video id="portfolio-video"
                       width="1920"
                       height="1200"
                       loop="true"
                       webkit-playsinline="true"
                       autoplay="true"
                       muted="muted"
                       preload="<?php echo get_the_post_thumbnail_url( get_the_ID(), '1200x1200' ); ?>"
                >
                    <source src="<?php echo get_template_directory_uri(). '/src/video/Bglobal.mp4'; ?>" type="video/mp4">
                    <!-- <source src="movie.ogg" type="video/ogg">-->
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>

<!--        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">-->
<!--        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>-->
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
<!--        <script>-->
<!--            var swiper = new Swiper('.swiper-container', {-->
<!--                pagination: {-->
<!--                    el: '.swiper-pagination',-->
<!--                    dynamicBullets: true,-->
<!--                },-->
<!--            });-->
<!--        </script>-->

    </main><!-- #main -->

<?php get_footer();
