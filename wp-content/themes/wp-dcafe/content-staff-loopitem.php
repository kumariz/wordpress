<article class="entry-content">
	<div class="row">
		<div class="large-3 small-3 columns thumbnail">
			<a href="<?php the_permalink(); ?>">
 			<?php if ( has_post_thumbnail()) : ?>
				<?php the_post_thumbnail( 'top-thumb' ); ?>
			<?php else : ?>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no_image.gif" alt="" title="" />
			<?php endif; ?>
			</a>
		</div> <!-- thumbnail -->

		<div class="large-9 small-9 columns">
			<header class="entry-header">
				<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <?php echo get_the_term_list( $post->ID, 'staff-cat', '<span class="staffCate">', ' , ', '</span>' );?></h3>
			</header><!-- .entry-header -->
			<div><?php the_excerpt(); ?></div>
		</div>
	</div>
</article><!-- .entry-content -->