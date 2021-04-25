<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Sydney
 */
?>
			</div>
		</div>
	</div><!-- #content -->

	<?php do_action('sydney_before_footer'); ?>

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a on="tap:toptarget.scrollTo(duration=200)" class="go-top"><i class="sydney-svg-icon"><?php sydney_get_svg_icon( 'icon-chevron-up', true ); ?></i></a>
		
	<footer id="colophon" class="site-footer" role="contentinfo" <?php sydney_do_schema( 'footer' ); ?>>
		<div class="site-info container">
			<!--a href="<?php //echo esc_url( __( 'https://wordpress.org/', 'sydney' ) ); ?>"><?php //printf( __( 'Proudly powered by %s', 'sydney' ), 'WordPress' ); ?></a-->
			<!--span class="sep"> | </span-->
			<?php //printf( __( 'Theme: %2$s by %1$s.', 'sydney' ), 'aThemes', '<a href="https://athemes.com/theme/sydney" rel="nofollow">Sydney</a>' ); ?>
			Copyright @2021 by Elegan All right reserved.
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<?php do_action('sydney_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>