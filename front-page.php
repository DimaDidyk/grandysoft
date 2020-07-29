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
        <section id="home-overview" class="banner with-bg">
            <img src="<?php echo get_the_post_thumbnail_url( get_the_ID(), '1200x1200' ); ?>" alt="bg" class="background">
            <div class="container">
                <div class="text-content">
                    <!-- <div class="section-title">Overview</div>-->
                    <p>Hello! We are young team of developers</p>
                    <div class="animate-area">
                        <p class="animate-text">We are oriented on <span>maximal clearness</span> and <span>client's keenness</span> into the process of project development.</p>
                        <p class="animate-text">We are interested in our <span>clients' satisfaction</span> via <span>fast releases</span> of viable products without quality loss.</p>
                        <p class="animate-text">We write clean and well-commented code, which in result lead us to great scalability and <span>simplifies development</span> in the future.</p>
                    </div>
                    <?php //echo get_post()->post_content; ?>
                </div>
            </div>
        </section>

        <section id="about-us" class="">
            <div class="container">
                <h2 class="section-title text-color-2">About us</h2>
                <div class="text-content align-center text-color-2">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur fugit incidunt laborum, maxime mollitia nobis officiis possimus quidem quo ratione.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur fugit incidunt laborum, maxime mollitia nobis officiis possimus quidem quo ratione.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur fugit incidunt laborum, maxime mollitia nobis officiis possimus quidem quo ratione.
                </div>
            </div>
        </section>

        <section id="team" class="">
            <div class="container">
                <h2 class="section-title text-color-2">Team</h2>
                <div class="team-container">
                <?php if( !empty( get_field('out_team', 'options') ) ): ?>
                    <?php foreach ( get_field('out_team', 'options') as $employer ): ?>
                        <div class="employer">
                            <div class="img-employer">
                                <img src="<?php echo $employer["image"]; ?>" alt="<?php echo $employer["name"]; ?>">
                            </div>
                            <h3 class="name"><?php echo $employer["name"]; ?></h3>
                            <div class="description"><?php echo $employer["description"]; ?></div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
                </div>
            </div>
        </section>

        <section id="home-services" class="bg-white">
            <div class="container">
                <div class="text-content">
                    <h2 class="section-title text-color-2">Our Services</h2>
                    <div class="services-wrap text-color-2">
                        <div class="service-item">
                            <div class="service-icon">
                                <?php require get_template_directory(). '/src/icons/saas.svg.php'; ?>
                            </div>
                            <div class="service-title">Scalable SAAS applications development</div>
                        </div>
                        <div class="service-item">
                            <div class="service-icon">
                                <?php require get_template_directory(). '/src/icons/real-time-applications.svg.php'; ?>
                            </div>
                            <div class="service-title">Real-time applications development</div>
                        </div>
                        <div class="service-item">
                            <div class="service-icon">
                                <?php require get_template_directory(). '/src/icons/support.svg.php'; ?>
                            </div>
                            <div class="service-title">Projects support</div>
                        </div>
                        <div class="service-item">
                            <div class="service-icon">
                                <?php require get_template_directory(). '/src/icons/web-services.svg.php'; ?>
                            </div>
                            <div class="service-title">Web services</div>
                        </div>
                        <div class="service-item">
                            <div class="service-icon">
                                <?php require get_template_directory(). '/src/icons/graphics.svg.php'; ?>
                            </div>
                            <div class="service-title">2D and 3D graphics</div>
                        </div>
                        <div class="service-item">
                            <div class="service-icon">
                                <?php require get_template_directory(). '/src/icons/automatization.svg.php'; ?>
                            </div>
                            <div class="service-title">Automatization</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" class="">
            <div class="container">
                <h2 class="section-title text-color-2">Portfolio</h2>
                <div class="portfolio-grid">
                    <div class="portfolio-item portfolio-item-1">
                        <img src="<?php echo get_template_directory_uri() .'/src/images/image.jpg' ?>" alt="">
                    </div>
                    <div class="portfolio-item portfolio-item-2">
                        <img src="<?php echo get_template_directory_uri() .'/src/images/photo_2020-07-28_16-22-16.jpg' ?>" alt="">
                    </div>
                    <div class="portfolio-item portfolio-item-4">
                        <img src="<?php echo get_template_directory_uri() .'/src/images/photo_2020-07-28_16-25-02.jpg' ?>" alt="">
                    </div>

                    <!--                    <div class="portfolio-item portfolio-item-3">-->
                    <!--                        <img src="--><?php //echo get_template_directory_uri() .'/src/images/photo_2020-07-28_16-34-52.jpg' ?><!--" alt="">-->
                    <!--                    </div>-->
                    <!--                    <div class="portfolio-item portfolio-item-5">-->
                    <!--                        <img src="--><?php //echo get_template_directory_uri() .'/src/images/photo_2020-07-28_16-22-16.jpg' ?><!--" alt="">-->
                    <!--                    </div>-->
                    <!--                    <div class="portfolio-item portfolio-item-6">-->
                    <!--                        <img src="--><?php //echo get_template_directory_uri() .'/src/images/photo_2020-07-28_16-22-16.jpg' ?><!--" alt="">-->
                    <!--                    </div>-->
                </div>
            </div>
        </section>

    </main><!-- #main -->
<?php
get_footer();
