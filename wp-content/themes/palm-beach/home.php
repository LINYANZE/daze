<?php
/**
 * The template for displaying the blog index (latest posts)
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Palm Beach
 */

get_header();

// Get Theme Options from Database.
$theme_options = palm_beach_theme_options();

// Display Magazine Homepage Widgets.
if ( ! is_paged() && is_active_sidebar( 'magazine-homepage' ) ) : ?>

	<div id="magazine-homepage-widgets" class="widget-area clearfix">

		<?php dynamic_sidebar( 'magazine-homepage' ); ?>

	</div><!-- #magazine-homepage-widgets -->

<?php
endif;

// Display Latest Posts Title.
if ( '' !== $theme_options['blog_title'] ) : ?>

	<header class="page-header">

		<h1 class="latest-posts-title widget-title"><?php echo wp_kses_post( $theme_options['blog_title'] ); ?></h1>

	</header><!-- .page-header -->

<?php
endif;
?>

	<section id="primary" class="content-archive content-area">
		<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) : ?>

				<div id="post-wrapper" class="post-wrapper clearfix">

					<?php while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content' );

					endwhile; ?>

				</div>

				<?php palm_beach_pagination(); ?>

			<?php
			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
