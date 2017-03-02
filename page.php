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
										<div class="title_single"><?php the_title( '<h1 class="post_title page_title_center">', '</h1>'); ?>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<?php the_content( 'Читати' ); ?>
								</div>
							</div>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>

		<?php get_sidebar(); ?>

	</div>
</div>
</section>

<?php get_footer(); ?>