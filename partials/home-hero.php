<?php
/**
 * Template part for displaying CTA on home page in HERO section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage: Northeastern Student Life
 * @version 0.1
 */

?>


	<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

		<!-- Adds FEATURED IMAGE to hero header-->
		<section id="banner" style="background-image: url('<?php echo $thumb['0'];?>')">

	        <div class="inner-banner">

	            <!-- Checks to see if CTA has buttons -->
		        <?php

			        if( !get_row_layout() == 'cta_buttons' ) {

			        ?>

	                	<div class="banner-centered">

		            <?php

			            } else {

			            ?>

	                	<div class="banner-content">

	                <?php }

	               // Checks if there is a TITLE //
		            if( get_sub_field('cta_header') ):

		                ?>

	                    <h2 class="white">

	                        <?php

		                        the_sub_field('cta_header');

		                        ?>
	                    </h2>

	                <?php

		                endif; // close loop

		                ?>

						</div><!-- .banner-centered or .banner-content -->

	                <div class="actions vertical">

	                    <?php

							// TOP BUTTON
		                    if( get_sub_field('top_button_name') ):

		                    ?>

		                    <div>

		                        <a class="button special major" href="<?php the_sub_field('top_button_link'); ?>"><?php the_sub_field('top_button_name'); ?></a>

		                    </div>

	                    <?php

		                    endif; // close loop

							// BOTTOM BUTTON
							if( get_sub_field('bottom_button_name') ):

		                ?>
	                        <div>

	                            <a class="button white major" href="<?php the_sub_field('bottom_button_link'); ?>"><?php the_sub_field('bottom_button_name'); ?></a>

	                        </div>

	                    <?php

		                    endif; // close loop

		                    ?>

	            </div><!-- .inner-banner -->

        </section>
