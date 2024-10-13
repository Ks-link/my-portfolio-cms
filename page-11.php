<?php
/**
 * To display my works page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package My_Portfolio
 */

?>

	<main id="primary" class="site-main">

		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</header>

			<div class="entry-content">
				<?php 
				if ( function_exists ( 'get_field' ) ) {
			
					if ( get_field( 'summary' ) ) {
						the_field( 'summary' );
                    }
						
					if ( get_field( 'summary_image' ) ) {
						echo wp_get_attachment_image( get_field( 'summary_image' ), 'medium', '', array( 'class' => 'alignleft' ));
					}

				} 
				?>
			</div>

		</article>

	    <?php endwhile; // End of the loop. ?>
		
	</main><!-- #main -->

<?php
