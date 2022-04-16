<?php get_header(); ?>

<main>
	<div class="section" style="text-align: left;">
		<div class="container">
			<div class="section__heading">
				<h1><?php the_title(); ?></h1>
				<strong class="text-muted"><?= get_the_date() ?></strong>
			</div>
			<div class="section__content">
				<div class="post">
					<?php if(has_post_thumbnail()): ?>
						<img class="post__img" src="<?= get_the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
					<?php endif; ?>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
