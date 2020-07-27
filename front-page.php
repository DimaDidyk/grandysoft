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
                    <h3>Hello! We are young team of developers</h3>
                    <div class="animate-area">
                        <h3 class="animate-text">We are oriented on <span>maximal clearness</span> and <span>client's keenness</span> into the process of project development.</h3>
                        <h3 class="animate-text">We are interested in our <span>clients' satisfaction</span> via <span>fast releases</span> of viable products without quality loss.</h3>
                        <h3 class="animate-text">We write clean and well-commented code, which in result lead us to great scalability and <span>simplifies development</span> in the future.</h3>
                    </div>
                    <?php //echo get_post()->post_content; ?>
                </div>
            </div>
        </section>

        <section id="home-services" class="bg-white">
            <div class="container">
                <div class="text-content">
                    <div class="section-title">Our Services</div>
                    <div class="services-wrap">
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

        <section id="about-us" class="">
            <div class="container">
                <div class="section-title">About us</div>
                <div class="text-content align-center">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur fugit incidunt laborum, maxime mollitia nobis officiis possimus quidem quo ratione.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur fugit incidunt laborum, maxime mollitia nobis officiis possimus quidem quo ratione.
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur fugit incidunt laborum, maxime mollitia nobis officiis possimus quidem quo ratione.
                </div>
            </div>
        </section>

        <section id="team" class="bg-white">
            <div class="container">
                <div class="section-title">Team</div>
                <div class="text-content align-center">

                </div>
            </div>
        </section>

    </main><!-- #main -->
<?php
get_footer();
