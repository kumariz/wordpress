<?php
/**
 * The template for displaying staff-cat-archive-staff
 */

get_header(); ?>
	<section id="primary" class="content-area large-9 columns">
		<div id="content" class="site-content staff" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">スタッフ - <?php single_term_title(); ?> -</h1>
			</header><!-- .page-header -->

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content-staff-loopitem' ); ?>

			<?php endwhile; ?>

			<?php _s_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<?php get_template_part( 'no-results', 'archive' ); ?>

		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>