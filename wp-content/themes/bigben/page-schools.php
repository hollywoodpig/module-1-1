<?php
	/* Template name: schools */

	get_header();
?>

<main>
	<div class="section">
		<div class="container">
			<div class="section__heading">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="section__content">
				<div class="grid">
					<div class="item item_card">
						<img class="item__img" src="<?= get_template_directory_uri() . '/assets/img/school-1.jpg' ?>" alt="Школа № 1">
						<strong class="item__title">Школа № 1</strong>
						<p class="item__text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
					<div class="item item_card">
						<img class="item__img" src="<?= get_template_directory_uri() . '/assets/img/school-2.jpg' ?>" alt="Школа № 2">
						<strong class="item__title">Школа № 2</strong>
						<p class="item__text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
					<div class="item item_card">
						<img class="item__img" src="<?= get_template_directory_uri() . '/assets/img/school-3.jpg' ?>" alt="Школа № 3">
						<strong class="item__title">Школа № 3</strong>
						<p class="item__text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
					<div class="item item_card">
						<img class="item__img" src="<?= get_template_directory_uri() . '/assets/img/school-4.jpg' ?>" alt="Школа № 4">
						<strong class="item__title">Школа № 4</strong>
						<p class="item__text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
					<div class="item item_card">
						<img class="item__img" src="<?= get_template_directory_uri() . '/assets/img/school-5.jpg' ?>" alt="Школа № 5">
						<strong class="item__title">Школа № 5</strong>
						<p class="item__text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
