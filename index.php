<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<?php include (TEMPLATEPATH . '/inc/_meta.php' ); ?>

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<?php include (TEMPLATEPATH . '/inc/_postmetadata.php' ); ?>

		</article>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/inc/_pagination.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

<?php get_footer(); ?>
