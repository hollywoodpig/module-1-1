<?php
	/* Template name: contacts */

	get_header();
?>

<main>
	<section class="section">
		<div class="container">
			<div class="section__heading">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="section__content">
				<div class="post">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>
