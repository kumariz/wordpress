<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _s
 */
?>
		</div><!-- #main -->

		<div class="breadcrumb">
			<div class="row">
				<div class="large-12 columns"> 
					<p>
						<?php if ( class_exists( 'WP_SiteManager_bread_crumb' ) ) { WP_SiteManager_bread_crumb::bread_crumb( 'type=string' ); } ?>
					</p>
				</div>
			</div>
		</div>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="row">
				<div class="large-4 columns">
					<?php do_action( 'before_sidebar' ); ?>
					<?php if ( ! dynamic_sidebar( 'footer-1' ) ) : ?>
					<aside id="calendar" class="widget widget_calendar">
						<h4 class="widget-title">新着ブログ記事</h4>
							<ul>
								<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
							</ul>
					</aside>
					<?php endif;?>
				</div>

				<div class="large-4 columns">
					<?php do_action( 'before_sidebar' ); ?>
					<?php if ( ! dynamic_sidebar( 'footer-2' ) ) : ?>
					<aside id="search" class="widget widget_search">
						<h4 class="widget-title">サイトマップ</h4>
							<?php wp_nav_menu( array( 'theme_location' =>'primary', 'container' => '', 'menu_class' => 'site-map', 'depth' => 1 ) ); ?>
					</aside>
					<?php endif;?>
				</div>

				<div class="large-4 columns">
					<?php do_action( 'before_sidebar' ); ?>
					<?php if ( ! dynamic_sidebar( 'footer-3' ) ) : ?>
					<aside id="site_meta" class="widget widget_site_meta">
						<h4 class="widget-title">サイト内検索</h4>
						<?php get_search_form(); ?>
					</aside>
					<?php endif;?>
				</div>
			</div>

			<div class="row">
				<div class="large-12 columns">
					<div class="site-info text-center">
						<p>Copyright&copy; 2012-<?php echo date_i18n( 'Y' );?><?php if ( get_page_by_path( 'sitemap' ) ) : ?>　<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a> All Rights Reserved. | <a href="<?php echo get_permalink( get_page_by_path( 'sitemap' )->ID ); ?>" title="sitemap" >Sitemap</a><?php endif; ?></p>
					</div><!-- .site-info -->
				</div>
			</div>
		</footer><!-- #colophon -->
	</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>