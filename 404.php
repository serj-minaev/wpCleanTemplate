<?php get_header(); ?>

	<main >
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">

				<h1><?php _e( 'Page not found', 'wpCore' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'wpCore' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>

<!-- <?php get_sidebar(); ?> -->

<?php get_footer(); ?>
