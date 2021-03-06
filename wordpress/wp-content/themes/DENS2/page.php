<?php get_header(); ?>

<main class="page-main clearfix" role="main">
	<?php
	// get_template_part('partials/breadcrumbs');
	?>
	<div class="page-center container">
		<h2 class="page-title page-center"><?php the_title(); ?></h2>

		<div class="dynamic-content">
			<?php if (have_posts()): ?>
				<?php while (have_posts()) : the_post(); ?>

					<?php the_content(); ?>

				<?php endwhile; ?>
				<?php

				?>
			<?php endif; ?>
		</div><!-- e: dynamic content -->

	</div><!-- e: page center -->
</main>

<?php get_footer(); ?>
