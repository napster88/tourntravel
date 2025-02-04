<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Travel_Agency
 */

get_header(); ?>

	<div id="primary4" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) : ?>
            <div class="archive-grid">
			<?php
                /* Start the Loop */
    			while ( have_posts() ) : the_post();
    
    				/*
    				 * Include the Post-Format-specific template for the content.
    				 * If you want to override this in a child theme, then include a file
    				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
    				 */
    				get_template_part( 'template-parts/content', 'trip' );
    
    			endwhile;
            ?>
            </div>
            <?php
			/**
             * Navigation
             * 
             * @hooked travel_agency_pagination
            */
            do_action( 'travel_agency_after_content' );
            
		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
