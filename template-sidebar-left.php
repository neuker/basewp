<?php
/**
 * Template Name: Sidebar Left
 *
 * The template for displaying the left sidebar page.
 *
 * @package basewp
 */

get_header(); ?>

<div class="container">

	<div class="row">

		<div id="primary" class="col-lg-9 col-md-9 col-md-push-3">
			
			<main id="main" class="site-main" role="main">

			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php
						/* Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );
					?>

				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->
			
		</div><!-- #primary -->

<?php get_sidebar('left'); ?>
<?php get_footer(); ?>