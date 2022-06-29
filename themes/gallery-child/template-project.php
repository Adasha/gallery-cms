<?php
/*
* Template Name: Project Page
* Template Post Type: page, article, collection, project
*/
?>
<?php get_header(); ?>

<div class="content-wrap">
	<main class="main main-fullwidth">
		<?php while ( have_posts() ): the_post(); ?>
			<article id="entry-<?php the_ID(); ?>" <?php post_class( 'entry entry-project' ); ?>>

				<div class="entry-project-side">
					<h2 class="entry-title"><?php the_title(); ?></h2>

					<div class="entry-meta">
						<?php the_terms( get_the_ID(), 'collection_category' ); ?>
					</div>

					<div class="entry-content">
						<?php $the_pod = pods( 'collection', get_the_ID() ); ?>
						<div>
							<?php echo $the_pod->display( 'description' ); ?>
						</div>
						<dl class="web-link">
							<?php
								if ( $the_pod->field( 'website_url' ) )
								{
									$the_url = $the_pod->display( 'website_url' );
									if ( $the_pod->field( 'website_name' ) )
									{
										$the_webname = $the_pod->display( 'website_name' );
									}
									else
									{
										$the_webname = $the_pod->display( 'website_url' );
									}
								}
							?>
							<dt>Website:</dt>
							<dd>
								<a href="<?php echo $the_url ?>" target="_blank" rel="noopener"><?php echo $the_webname; ?></a>
							</dd>
						</dl>
					</div>
				</div>

				<div class="entry-project-main">
					<div class="project-assets">
						<?php the_content(); ?>
					</div>
				</div>

			</article>
		<?php endwhile; ?>
	</main>
</div>

<?php get_footer(); ?>
