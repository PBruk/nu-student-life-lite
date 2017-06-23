<?php
/**
 * Template part for displaying DUAL COLUMN on home page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage: Northeastern Student Life
 * @version 0.1
 */

?>


	<?php $image_alignment = get_sub_field('dual_column_image_orientation'); ?>

	<section id="image-and-text" class="default-neat-grid" itemprop="articleBody">

		<div class = "container">

			<?php

				$selected = get_sub_field('dual_column_image_orientation');

				// IMAGE ON LEFT
				if($image_alignment == 'Left') {

				?>

					<div class=" pull-left image-and-text img-left">

					<?php }

				// IMAGE ON RIGHT
				if($image_alignment == 'Right') {

				?>

					<div class="col-xs-12 col-sm-12 col-md-4 pull-right image-and-text img-right">

						<?php } ?>

			    		<img src="<?php the_sub_field('dual_column_image'); ?>">

		    		</div>

		    <?php

			    $selected = get_sub_field('dual_column_image_orientation');

				// TEXT TO RIGHT
				if($image_alignment == 'Left') {

				?>

					<div class="col-xs-12 col-sm-12 col-md-7 pull-right">

						<?php }

				// TEXT TO LEFT
				if($image_alignment == 'Right') {

				?>

					<div class="col-xs-12 col-sm-12 col-md-7 pull-left">

						<?php }

				// TITLE
				if( get_sub_field('dual_column_title') ): ?>

		        	<h2>

		        		<?php

			        		the_sub_field('dual_column_title');

			        		?>

		        	</h2>

		    <?php

			    endif;

				// SUBTITLE
		    	if( get_sub_field('dual_column_subtitle') ):

		    	?>

		        	<h4 class="red lead">

		        		<?php

			        		the_sub_field('dual_column_subtitle');

			        		?>

		        	</h4>

		    <?php

			    endif;

				// CONTENT
		    	if( get_sub_field('dual_column_content') ):

		    	?>

		        	<p class="dual_content">

		        		<?php

			        		the_sub_field('dual_column_content');

			        		?>

		        	</p>

		    <?php

			    endif;

				// BUTTON
				if( get_sub_field('button_text') ):

				?>

					<p class="text-left">

						<a class = 'btn' href = "<?php

							the_sub_field('button_link');

								?>"><?php

							the_sub_field('button_text'); ?> &raquo;

						</a>

					</p>

			<?php

				endif;

				?>

		</div>

	</section>
