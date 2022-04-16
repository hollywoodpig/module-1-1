<?php
	/* Template name: teachers */

	get_header();

	$teachers = new WP_Query([
		'post_type' => 'teachers',
		'posts_per_page' => -1
	]);
?>

<main>
	<section class="section">
		<div class="container">
			<div class="section__heading">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="section__content">
				<?php if($teachers->have_posts()): ?>
					<div class="teachers">
						<?php while($teachers->have_posts()): $teachers->the_post(); ?>
							<div class="item item_card">
								<?php if(has_post_thumbnail()): ?>
									<img class="item__img" src="<?= get_the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
								<?php endif; ?>
								<strong class="item__title"><?php the_title(); ?></strong>
								<p class="item__text"><?= get_the_excerpt(); ?></p>
							</div>
						<?php endwhile; ?>
					</div>
				<?php else: ?>
					<p>Это странно, но у нас пока что никто не работает.</p>
				<?php endif; ?>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
