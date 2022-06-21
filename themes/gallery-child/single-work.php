<?php
	get_header();

	$post_ID = get_the_ID();

?>

<div class="content-wrap">
	<main class="main main-fullwidth">
		<?php while ( have_posts() ): the_post(); ?>
			<article id="entry-<?php the_ID(); ?>" <?php post_class( 'entry' ); ?>>

				<h1 class="entry-title"><?php the_title(); ?></h1>
				
				<div class="entry-content col-narrow">
					<?php the_content(); ?>
					<?php wp_link_pages(); ?>
				</div>

				<div class="col-narrow">
					<?php comments_template(); ?>
				</div>
			</article>
		<?php endwhile; ?>
	</main>
</div>

<?php get_footer(); ?>
