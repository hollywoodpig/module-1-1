<?php
	/* Template name: services */

	get_header();

	$services = new WP_Query([
		'post_type' => 'services',
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
				<?php if ($services->have_posts()): ?>
					<div class="grid">
						<?php while($services->have_posts()): $services->the_post(); ?>
							<a href="<?php the_permalink(); ?>" class="item">
								<strong class="item__title"><?php the_title(); ?></strong>
							</a>
						<?php endwhile; ?>
					</div>
				<?php else: ?>
					<p>Получается, что мы не оказываем никаких услуг.</p>
				<?php endif; ?>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
