<?php
	get_header();

	$teachers = new WP_Query([
		'post_type' => 'teachers'
	]);

	$news = new WP_Query([
		'post_type' => 'post'
	]);

	$isServiceSent = false;

	if (isset($_POST['service-submit'])) {
		$service = $_POST['service-option'];
		$name = $_POST['service-name'];
		$tel = $_POST['service-tel'];
		$email = $_POST['service-email'];
		$date = $_POST['service-date'];

		if (!isset($service) || !isset($name) || !isset($tel) || !isset($email) || !isset($date)) return;

		$email_to = get_option('admin_email');
		$subject = 'Новая заявка';
		$body = "Имя: $name \r\nТелефон: $tel \r\nПочта: $email \r\nПредполагаемая дата: $date \r\nУслуга: $service";
		$headers = "From: $name <$email_to> \r\nReply-To: $email";

		wp_mail($email_to, $subject, $body, $headers);

		$isServiceSent = true;
	}
?>

<main>
	<!-- Первый экран -->
	<section class="first-screen overlay" style="background-image: url('<?= get_template_directory_uri() . '/assets/img/first-screen.jpg' ?>')">
		<div class="container">
			<div class="first-screen__content">
				<h1><?= get_bloginfo('name') ?></h1>
				<p class="text-muted"><?= get_bloginfo('description') ?></p>
			</div>
		</div>
	</section>
	<?php if($isServiceSent): ?>
		<div class="space-y">
			<div class="item">
				<p>Ваша заявка была успешно отправлена. Мы свяжемся с вами в ближайшее время (нет)</p>
			</div>
		</div>
	<?php endif; ?>
	<!-- Преимущества -->
	<section class="section">
		<div class="container">
			<div class="section__heading">
				<h2>Наши преимущества</h2>
			</div>
			<div class="section__content">
				<div class="advantages">
					<img class="advantages__img" alt="Наши преимущества" src="<?= get_template_directory_uri() . '/assets/img/advantages.jpg' ?>">
					<div class="advantages__items">
						<div class="item">
							<strong class="item__title">Высококвалифицированные преподаватели</strong>
						</div>
						<div class="item">
							<strong class="item__title">Удобная программа обучения</strong>
						</div>
						<div class="item">
							<strong class="item__title">Электронная запись</strong>
						</div>
						<div class="item">
							<strong class="item__title">Доступные цены</strong>
						</div>
						<a href="<?= get_page_link(66); ?>" class="btn">Записаться</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Услуги -->
	<section class="section section_fluid">
		<div class="container">
			<div class="section__heading">
				<h2>Заказать услугу</h2>
			</div>
		</div>
		<div class="section__content">
			<div class="container">
				<form class="form form_inline" method="post">
					<select name="service-option" class="input">
						<option value="Английский язык для взрослых">Английский язык для взрослых</option>
						<option value="Английский язык для школьников">Английский язык для школьников</option>
						<option value="Индивидуальный английский язык">Индивидуальный английский язык</option>
						<option value="Корпоративное обучение">Корпоративное обучение</option>
					</select>
					<input required name="service-name" class="input" type="text" placeholder="Ваше имя">
					<input required name="service-tel" pattern="[0-9]{1}-[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}" class="input" type="tel" placeholder="8-800-555-35-35">
					<input required name="service-email" class="input" type="email" placeholder="Ваша почта">
					<input required name="service-date" class="input" type="date" placeholder="Предполагаемая дата">
					<button name="service-submit" class="btn">Отправить</button>
				</form>
			</div>
		</div>
	</section>
	<!-- Преподаватели -->
	<section class="section">
		<div class="container">
			<div class="section__heading">
				<h2>Наши преподаватели</h2>
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
					<div class="space-t">
						<a href="<?= get_page_link(68) ?>" class="btn">Полный список преподавателей</a>
					</div>
				<?php else: ?>
					<p>Это странно, но у нас пока что никто не работает.</p>
				<?php endif; ?>
			</div>
		</div>
	</section>
	<!-- Добавил чисто из-за того, что должны же типы секций чередоваться, ну, может потом уберу -->
	<section class="section section_fluid">
		<div class="container">
			<div class="section__heading">
				<h2>О нас</h2>
			</div>
		</div>
		<div class="section__content">
			<div class="container">
				<p>Дошкольное образование – одно из наиболее перспективных направлений развития современного образования. Имидж, формирующийся в нашем сознании, влияет на восприятие, которое, в свою очередь, влияет на выбор. Школа дошкольного образования «Big Ben» решила выйти на новые горизонты рынка образовательных услуг.</p>
			</div>
		</div>
	</section>
	<!-- Новости -->
	<section class="section">
		<div class="container">
			<div class="section__heading">
				<h2>Последние новости</h2>
			</div>
			<div class="section__content">
				<?php if($news->have_posts()): ?>
					<div class="grid">
						<?php while($news->have_posts()): $news->the_post(); ?>
							<a href="<?php the_permalink(); ?>" class="item item_card">
								<?php if(has_post_thumbnail()): ?>
									<img class="item__img" src="<?= get_the_post_thumbnail_url() ?>" alt="<?php the_title(); ?>">
								<?php endif; ?>
								<strong class="item__title"><?php the_title(); ?></strong>
								<p class="item__text"><?= get_the_excerpt(); ?></p>
							</a>
						<?php endwhile; ?>
					</div>
				<?php else: ?>
					<p>Новостей пока что нет.</p>
				<?php endif; ?>
				<div class="space-t">
					<a href="<?= get_page_link(64) ?>" class="btn">Посмотреть все новости</a>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
