<?php get_header(); ?>

<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="content_text">
					<?php $posts = get_posts ("category=25&orderby=date&numberposts=3"); ?> 
					<?php if ($posts) : ?>
						<?php foreach ($posts as $post) : setup_postdata ($post); ?>
							
							<div class="block">
								<div class="name"> 
									<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a> 
								</div>
							</div>
							
							<?php 
							endforeach;
							wp_reset_postdata();
							?>
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