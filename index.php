<?php get_header(); ?>


	<?php if( have_posts() ): ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
			<div class="wrapper">
			<?php while( have_posts() ):the_post(); ?>

				<h2><?php the_title(); ?></h2>
				<?php the_content( ); ?>


			<?php endwhile; ?>
			</div>
		</article>

	<?php endif; ?>


<?php get_footer(); ?>