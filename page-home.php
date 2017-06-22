<?php
/**
 * Template Name: Home
 *
 * This is the template that displays the home page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package NU_Student_Life_Lite
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php // open the WordPress loop
				if (have_posts()) : while (have_posts()) : the_post();

					// are there any rows within within our flexible content?
					if( have_rows('home_page_content') ):

						// loop through all the rows of flexible content
						while ( have_rows('home_page_content') ) : the_row();

						?>

						<div class="hero">

							<?php

						// HERO CTA
						if( get_row_layout() == 'hero_cta' )
							get_template_part('partials/home', 'hero');

							?>

						</div><!-- .hero -->

						<div class="main">

							<?php

						// COLOR BLOCKS
						if( get_row_layout() == 'color_blocks' )
							get_template_part('partials/home', 'blocks');

						// ICON BOXES
						if( get_row_layout() == 'icon_boxes' )
							get_template_part('partials/home', 'boxes');

						// CONTENT
						if( get_row_layout() == 'full_width_text_box' )
							get_template_part('partials/home', 'fullwidth');

							?>

						</div><!-- .main -->

							<?php

						endwhile; // close the loop of flexible content
					endif; // close flexible content conditional

				endwhile; endif; // close the WordPress loop ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
