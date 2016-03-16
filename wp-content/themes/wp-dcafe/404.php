<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package _s
 */

get_header(); ?>
	<div id="primary" class="content-area large-9 columns">
		<div id="content" class="site-content" role="main">
			<article id="post-0" class="post error404 not-found">
				<header class="entry-header">
					<h1 class="entry-title">ごめんなさい。そのページは見つかりません。</h1>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/404.png" alt="みつかりませんでしたぷー。" />
				</header><!-- .entry-header -->

				<div class="entry-content">
					<p>お探しのキーワードで検索してみてください。</p>
					<?php get_search_form(); ?>
					<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<?php bloginfo( 'name' ); ?>
						トップページへ戻る</a>
					</p>
				</div><!-- .entry-content --> 
			</article><!-- #post-0 .post .error404 .not-found --> 

		</div><!-- #content --> 
	</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
