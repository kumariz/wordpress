<?php
/**
 * The template for displaying front-page
 */
get_header(); ?>
	<div class="row front-feature">
	<?php if ( get_page_by_path( 'concept' ) ) : ?>
		<div class="large-4 columns">
			<a href="<?php echo get_permalink( get_page_by_path( 'concept' )->ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/1.jpg" alt=""></a>
			<h5><a href="<?php echo get_permalink( get_page_by_path( 'concept' )->ID ); ?>">ハンモックのお席です</a></h5>
			<p>客席はすべてハンモックとなっております。少し揺れながら、リラックスした時間をお過ごしください。 </p>
		</div>
	<?php endif; ?>
	<?php if ( get_page_by_path( 'menu' ) ) : ?>
		<div class="large-4 columns">
			<a href="<?php echo get_permalink( get_page_by_path( 'menu' )->ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/2.jpg" alt=""></a>
			<h5><a href="<?php echo get_permalink( get_page_by_path( 'menu' )->ID ); ?>">100種類以上のドリンク</a></h5>
			<p>珈琲、紅茶からカクテルなどアルコール類もご準備しております。</p>
		</div>
	<?php endif; ?>
	<?php if ( get_page_by_path( 'access' ) ) : ?>
		<div class="large-4 columns">
			<a href="<?php echo get_permalink( get_page_by_path( 'access' )->ID ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/3.jpg" alt=""></a>
			<h5><a href="<?php echo get_permalink( get_page_by_path( 'access' )->ID ); ?>">吉祥寺駅徒歩5分</a></h5>
			<p>南側公園口より、徒歩5分。当店までの詳しい地図などはこちらを御覧ください。</p>
		</div>
	<?php endif; ?>
	</div>

	<div class="front-news">
		<div class="row">
			<div class="large-12 columns">
				<h3>最新のお知らせ</h3>
				<div class="row">
					<?php query_posts( 'posts_per_page=4' ); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<div class="large-3 small-12 columns">
						<a href="<?php the_permalink(); ?>">
							<div class="newspost"> 
								<div class="row">
									<div class="large-12 small-3 columns">
										<div class="thumbnail">
										<?php if ( has_post_thumbnail() ) : ?>
											<?php the_post_thumbnail( 'top-thumb', array( 'class' => 'thumbnail' ) ); ?>
										<?php else : ?>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no_image.gif" alt="" title="" />
										<?php endif; ?>
										</div>
									</div>

									<div class="large-12 small-9 columns">
										<div class="news-meta">
											<div class="date">
												<div class="genericon genericon-time"></div>
												<?php the_time( 'Y/m/d' ); ?>
											</div>
											<p>
												<?php echo mb_substr( get_the_title(), 0, 40 ); ?>
											</p> 
										</div>
									</div>
								</div>
							</div>
						</a>
					</div>
				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
				</div>
			</div>
		</div> <!-- /row -->
	</div> <!-- /front-news -->

	<div class="front-sp">
		<div class="row">		
			<div class="large-6 columns">
				<div class="circle">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/4.jpg" alt="" />
				</div>
			</div> <!--  -->

			<div class="large-6 columns">
				<h2>みんなの来店を<br />待ってるワンッ！</h2>
				<p>たまに出勤する、店長のマルくんです。</p> 
			</div>
		</div>
	</div>
	<div id="main" class="site-main row">
<?php get_footer(); ?>