<?php
	/* Template name: news */

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
					<a href="#" class="item item_card">
						<img class="item__img" src="<?= get_template_directory_uri() . '/assets/img/news-1.jpg' ?>" alt="Рыженков Михаил Александрович">
						<strong class="item__title">Мы обанкротились</strong>
						<p class="item__text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p class="item__text text-muted">02.02.2022</p>
					</a>
					<a href="#" class="item item_card">
						<img class="item__img" src="<?= get_template_directory_uri() . '/assets/img/news-2.jpg' ?>" alt="Рыженков Михаил Александрович">
						<strong class="item__title">Билайн - живи на яркой стороне</strong>
						<p class="item__text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p class="item__text text-muted">02.02.2022</p>
					</a>
					<a href="#" class="item item_card">
						<img class="item__img" src="<?= get_template_directory_uri() . '/assets/img/news-3.jpg' ?>" alt="Рыженков Михаил Александрович">
						<strong class="item__title">У нас работает 90 млн монголов</strong>
						<p class="item__text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
						<p class="item__text text-muted">02.02.2022</p>
					</a>
				</div>
			</div>
		</div>
	</div>
</main>

<?php get_footer(); ?>
