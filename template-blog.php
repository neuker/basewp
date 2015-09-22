<?php
/**
 * Template Name: Blog
 *
 * @package basewp
 */

get_header(); ?>

<div class="container">

	<div class="row">

		<div id="primary" class="col-lg-9 col-md-9">
			
			<main id="main" class="site-main" role="main">

			<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

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

				<?php basewp_paging_nav(); ?>

			<?php else : ?>

				<?php get_template_part( 'content', 'none' ); ?>

			<?php endif; ?>

			</main><!-- #main -->
		</div><!-- #primary -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>