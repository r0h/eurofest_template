<?php get_header(); ?>

<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="content_text">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<div class="blog_item">
							<div class="row">
								<div class="col-md-12">
									<div class="row">
										<a href="<?php the_permalink(); ?>"><?php the_title( '<h2 class="post_title">', '</h2>'); ?></a>
										<ul class="post_info">
											<li><?php the_category(); ?></li>
											<li><?php the_time( 'j M Y' ); ?></li>
										</ul>
									</div>
								</div>
								<div class="col-md-5 col-sm-5">
									<div class="miniatura"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
								</div>
								<div class="col-md-7 col-sm-7">
									<?php the_content( 'Читати' ); ?>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="row">
				<div class="pagination">
					<?php wp_pagenavi(); ?>
				</div>
			</div>
		</div>

		<?php get_sidebar(); ?>

	</div>
</div>
</section>

<?php get_footer(); ?>