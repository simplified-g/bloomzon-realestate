<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package blogtay
 */

get_header();
?>

<div class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-lg-12">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</div>
		</div>
	</div>
	
</div><!-- .page-header -->

<div id="primary" class="content-area container">
	<div class="row">
		
		
		<main id="main" class="site-main col-sm-12 col-lg-8">

			<?php if ( have_posts() ) : ?>

				

				<?php
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->
	<div class="col-sm-12 col-lg-4">
		<?php 
		get_sidebar();
		?>
		
	</div>
</div>
</div><!-- #primary -->

<?php

get_footer();
