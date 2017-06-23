<?php
/**
 * Template part for displaying COLOR BLOCKS on home page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage: Northeastern Student Life
 * @version 0.1
 */

?>

	<div class="color-header">

		<div class="color-header-content">

		    <?php

			    // HEADER
			    if( get_sub_field('color_block_header') ):

			    ?>

	            <h2>

	                <?php

		                the_sub_field('color_block_header');

		                ?>

	            </h2>

            <?php

	            endif; // CLOSE LOOP

			    // SUBHEADER
	            if( get_sub_field('color_block_subheader') ):

	            ?>

                <h4>

                    <?php

	                    the_sub_field('color_block_subheader');

	                    ?>

                </h4>

			<?php

				endif; // CLOSE LOOP

			    // TEXT
				if( get_sub_field('color_block_text') ):

				?>

                <h5>

                    <?php

	                    the_sub_field('color_block_text');

	                    ?>

                </h5>

            <?php

	            endif; // CLOSE LOOP

	            ?>

	    </div>

	</div>

    <div class="blocks-wrap">

            <?php

                if( have_rows('color_block_unit') ):

                	while ( have_rows('color_block_unit') ) : the_row();
            	?>

                <div class="single-block">

                    <div class="content-wrap">

                        <?php

							// TITLE
	                        if( get_sub_field('color_block_title') ):

	                        ?>

                            <h2>

                                <?php

	                                the_sub_field('color_block_title');

	                                ?>

                            </h2>

                        <?php

	                        endif; // CLOSE LOOP

							// CONTENT
	                        if( get_sub_field('color_block_content') ):

	                        ?>

                            <p class="color-block">

                                <?php

	                                the_sub_field('color_block_content');

	                                ?>
                            </p>

                        <?php

	                        endif; // CLOSE LOOP

	                        ?>

                    </div><!-- .content-wrap -->

                </div><!-- .single-block -->

            <?php

                endwhile;

                endif; // CLOSE LOOP

            	?>

    </div>



