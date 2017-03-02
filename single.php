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
										<div class="title_single"><?php the_title( '<h2 class="post_title">', '</h2>'); ?>
										</div>
										<ul class="post_info">
											<li><?php the_category(); ?></li>
											<li><?php the_time( 'j M Y' ); ?></li>
											
										</ul>
									</div>
								</div>
								<div class="col-md-12">

								</div>
								<div class="col-md-12">
									<?php the_content( 'Читати' ); ?>
									<div class="post_tags">
										<p><span><?php the_tags( '#', ' / ' ); ?></span></p>
									</div>
									<div class="posts_prev_next">
										<div class="nav_previous">
										<span>Попередня новина</span>
											<?php if( get_adjacent_post(false, '', true) ) { 
												previous_post_link('<p><< %link</p>');
											}
											else { 
												$first = new WP_Query('posts_per_page=1&order=DESC');
												$first->the_post();
												echo '<a href="' . get_permalink() . '"><p>Остання новина</p></a>';
												wp_reset_postdata();
											};  ?>
										</div>

										<div class="nav_next">
											<span>Наступна новина</span>
											<?php if( get_adjacent_post(false, '', false) ) { 
												next_post_link('<p>%link >></p>');
											}
											else { 
												$last = new WP_Query('posts_per_page=1&order=ASC');
												$last->the_post();
												echo '<a href="' . get_permalink() . '"><p>Початкова новина</p></a>';
												wp_reset_postdata();
											};  ?>
										</div>
									</div>
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