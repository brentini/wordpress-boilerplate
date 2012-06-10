<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php include (TEMPLATEPATH . '/inc/_post.php' ); ?>
		

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/inc/_pagination.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

<?php get_footer(); ?>
