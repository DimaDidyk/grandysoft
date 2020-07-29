<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package grandysoft
 */
?>
	<footer class="site-footer" id="footer-contact-form">
        <div class="container">
            <div class="contact-us-footer">
                <div class="row">
                    <div class="col col-35 padding-right-15">
                        <h3>Contact us</h3>
                        <div class="form-wrap font1">
                            <?php echo do_shortcode('[contact-form-7 title="Contact us"]'); ?>
                        </div>
                    </div>
                    <div class="col col-30 padding-left-15 padding-right-15">
                        <h3>General Contact</h3>
                        <p>Phone: <a href="tel:+380939227888">+380939227888</a></p>
                        <p>Email: <a href="mailto:supprt@grandysoft.com">supprt@grandysoft.com</a></p>
                        <p>54000, Soborna Street 1</p>
                        <p>Mykolaiv, Ukraine</p>

                    </div>
                    <div class="col col-35 padding-left-15">
                        <h3> &#173;</h3>
                        <iframe lazy-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2722.4531963334816!2d31.990596915824295!3d46.97243253956194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c5c97a8eb60237%3A0x7cf26144ad488ae5!2sSoborna%20St%2C%201%2C%20Mykolaiv%2C%20Mykolaivs&#39;ka%20oblast%2C%2054000!5e0!3m2!1sen!2sua!4v1595928620775!5m2!1sen!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
		<div class="container">
            <div class="copyright align-center">© Copyright <?php the_time('Y'); ?>. <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
