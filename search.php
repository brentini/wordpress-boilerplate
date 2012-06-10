<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<h2>Search Results</h2>

		<?php include (TEMPLATEPATH . '/inc/_pagination.php' ); ?>

		<?php while (have_posts()) : the_post(); ?>

			<?php include (TEMPLATEPATH . '/inc/_post.php' ); ?>

		<?php endwhile; ?>

		<?php include (TEMPLATEPATH . '/inc/_pagination.php' ); ?>

	<?php else : ?>

		<h2>No posts found.</h2>

	<?php endif; ?>

<?php get_footer(); ?>
