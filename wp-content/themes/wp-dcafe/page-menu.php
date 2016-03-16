<?php
/*
The template for displaying cafe-menu
Template Name: メニュー用テンプレート
*/
get_header(); ?>

	<div id="primary" class="content-area large-9 columns menu">
		<div id="content" class="site-content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<h1 class="entry-title"><?php the_title(); ?></h1>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>

					<?php if( get_field( 'menu-cat' ) ): ?>
					<ul id="page_link_menu">
					<?php while( has_sub_field( 'menu-cat' ) ): ?>
						<li><a href="#<?php esc_attr( the_sub_field( 'menu-cat-label' ) ); ?>"><?php esc_html( the_sub_field( 'menu-cat-name' ) ); ?></a></li>
					<?php endwhile; ?>
					</ul>
					<?php endif; ?>

					<?php if( get_field( 'menu-cat' ) ): // メニューカテゴリーが登録されている場合
					while( has_sub_field( 'menu-cat' ) ): // メニューカテゴリーのループ開始 ?>
					<div id="<?php esc_attr( the_sub_field( 'menu-cat-label' ) ); ?>" class="menu-cat-set">
						<h2><?php esc_html( the_sub_field( 'menu-cat-name' ) ); ?></h2>
	
						<?php if( get_sub_field( 'menu-set' ) ): // メニューが登録されている場合
						while( has_sub_field( 'menu-set' ) ): // メニューのループ開始 ?>
						<div class="menu_set">
							<div class="menu_set_txt<?php echo get_sub_field( 'menu-set-image' ) ? ' has_image' : ''; ?>">
								<h4><?php esc_html( the_sub_field( 'menu-set-name' ) ); ?>
									<span class="price"><?php esc_html( the_sub_field( 'menu-set-price' ) ); ?>YEN</span>
								</h4>
								<p><?php nl2br( esc_html( the_sub_field( 'menu-set-description' ) ) ); ?></p>
							</div><!-- /.menu_set_txt -->
	
							<?php if ( get_sub_field( 'menu-set-image' ) ) : // 画像が登録されている場合　?>
							<div class="menu_set_image">
								<?php echo wp_get_attachment_image( get_sub_field( 'menu-set-image' ), 'thumbnail' ); ?>
							</div>
							<?php endif; ?>
						</div><!-- /.menu_set -->
						<?php endwhile; endif; ?>
					</div>
					<?php endwhile; endif; ?>

				</div><!-- .entry-content -->
				<?php edit_post_link( __( 'Edit', '_s' ), '<footer class="entry-meta"><span class="edit-link">', '</span></footer>' ); ?>
			</article><!-- #post-## -->

		<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>