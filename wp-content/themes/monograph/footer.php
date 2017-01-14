<?php
/**
 * The template for displaying the footer.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Monograph
 */

?>

	<footer class="site-footer" role="contentinfo">
	
		<div class="wrapper wrapper-footer">

			<?php get_sidebar( 'footer' ); ?>
			
			<div class="wrapper-copy">
				<p class="copy"><?php esc_attr_e('Copyright &copy;','monograph');?> <?php echo date_i18n(__("Y","monograph")); ?> <?php bloginfo('name'); ?>. <?php esc_attr_e('All Rights Reserved', 'monograph');?>. <span class="theme-credit"><?php printf( esc_html__( 'Theme by %1$s', 'monograph' ), '<a href="http://www.ilovewp.com/" rel="designer">I Love WordPress</a>' ); ?></span></p>
			</div><!-- .wrapper-copy -->

		</div><!-- .wrapper .wrapper-footer -->
	
	</footer><!-- .site-footer -->

</div><!-- end #container -->

<?php wp_footer(); ?>

</body>
</html>