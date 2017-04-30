<?php
/**
 * The template for displaying the footer of president child theme
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>
		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>
    <div class="footer-border"></div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">
            <div class="contact">
                <div class="contact-form">
                    <p>Drop us a Line</p>
                    <div><?php echo do_shortcode( '[contact-form-7 id="59" title="Contact form 1"]' ); ?>
                    </div>
                </div>
                <div class="footer-floatl">
                    <p>Contact Us </p>
                    <blockquote>Name&#58; My President</blockquote>
                    <blockquote>Email&#58; info@mypresident.com</blockquote>
                    <blockquote>Location&#58; Newark</blockquote>
                </div>
                <div class="social-media">
                    <p>Connect with us</p>
                    <p><?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?> </p>
                </div>
                <div class="clearfloat"></div>
            </div>

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' ); ?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

    <div class="footer-border-bottom"></div>
    <p class="copyright">&copy; Mypresident 2017</p>

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
