<?php
/**
 * Template part for displaying ICON BOXES on home page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage: Northeastern Student Life
 * @version 0.1
 */

?>

	<section class="">

        <div class="title">

	        <?php

				// SHORT TITLE
		        if( get_sub_field('leader_short') ):

		        ?>
                    <h4>

                        <?php

	                        the_sub_field('leader_short');

	                        ?>

                    </h4>

                        <?php

	                        endif; // END LOOP

							// TAGLINE
	                        if( get_sub_field('leader_tagline') ):

	                        ?>

					<h2>

						<?php

							the_sub_field('leader_tagline');

							?>

                    </h2>

                        <?php

	                        endif; //END LOOP

	                        ?>

		</div>

        <div class="row uniform">

            <?php

                if( have_rows('icon_third') ):

                	while ( have_rows('icon_third') ) : the_row();

				?>

				<div class="3across col-md-4">

            		<section class="box icon-centered">

						<?php

							// BOX ICON
							if( get_sub_field('icon_third_image') ):

							?>

						<figure class="icon-third-image">

							<img src="<?php the_sub_field('icon_third_image'); ?>" alt="Image" height="125" width="125">

						</figure>

						<?php

							endif; // END LOOP

							// BOX TITLE
							if( get_sub_field('icon_third_title') ):

							?>

							<h3>

		                        <?php

			                        the_sub_field('icon_third_title');

			                    	?>

                        	</h3>

						<?php

							endif; //END LOOP

							// BOX CONTENT
							if( get_sub_field('icon_third_content') ):

							?>

							<p>

                                <?php

	                                the_sub_field('icon_third_content');

	                            	?>

                            </p>

						<?php

							endif; //END LOOP

							?>

					</section><!--  -->

				</div><!-- -->


            <?php

                endwhile;

                endif; // END LOOP
            ?>

		</div>

        <?php

			// PULLQUOTE
	        if( get_sub_field('icon_third_pq') ):

	        ?>

        	<div class="icon-third-pq">

	        	<h3>

                    <?php

	                    the_sub_field('icon_third_pq');

	                    ?>

	        	</h3>

        	</div>

        <?php

	        endif; //END LOOP

	        ?>

	</section>




