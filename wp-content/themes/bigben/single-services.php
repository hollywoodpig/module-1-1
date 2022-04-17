<?php
	get_header();

	$terms = get_the_terms(get_the_ID(), 'categories');
?>

<main>
	<section class="section" style="text-align: left;">
		<div class="container">
			<div class="section__heading">
				<h1><?php the_title(); ?></h1>
				<?php foreach($terms as $term): ?>
					<strong class="text-muted"><?= $term->name ?></strong>
				<?php endforeach; ?>
			</div>
			<div class="section__content">
				<div class="post">
					<?php if(has_post_thumbnail()): ?>
						<img class="post__img" src="<?= get_the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
					<?php endif; ?>
					<?php the_excerpt(); ?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
