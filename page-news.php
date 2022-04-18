<?php
	/* Template name: news */

	get_header();

	global $wp_query;

	$wp_query = new WP_Query([
		'post_type' => 'post',
		'paged' => get_query_var('paged') ?: 1
	]);
?>

<main>
	<section class="section">
		<div class="container">
			<div class="section__heading">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="section__content">
				<?php if(have_posts()): ?>
					<div class="grid">
						<?php while(have_posts()): the_post(); ?>
							<a href="<?php the_permalink(); ?>" class="item item_card">
								<?php if(has_post_thumbnail()): ?>
									<img class="item__img" src="<?= get_the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
								<?php endif; ?>
								<strong class="item__title"><?php the_title(); ?></strong>
								<p class="item__text"><?= get_the_excerpt(); ?></p>
							</a>
						<?php endwhile; ?>
					</div>
					<div class="space-t">
						<?php posts_nav_link(); ?>
					</div>
				<?php else: ?>
					<p>Новостей пока что нет.</p>
				<?php endif; ?>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
