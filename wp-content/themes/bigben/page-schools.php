<?php
	/* Template name: schools */

	get_header();

	$schools = new WP_Query([
		'post_type' => 'school',
		'posts_per_page' => -1
	]);
?>

<main>
	<div class="section">
		<div class="container">
			<div class="section__heading">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="section__content">
				<?php if($schools->have_posts()): ?>
					<div class="grid">
						<?php while($schools->have_posts()): $schools->the_post(); ?>
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
					<p>Похоже, мы так и не открыли ни одной школы.</p>
				<?php endif; ?>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
