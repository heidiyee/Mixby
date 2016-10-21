<?php
/*
Theme Name: Mixby Wordpress
Author: Heidi Yee
Description: Learning Wordpress using Mixby site by customizing new theme based on twentyfifteen theme
Version: 1.0.0
*/

get_header(); ?>



		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();
			/*
			 * Include the post format-specific template for the content. If you want to
			 * use this in a child theme, then include a file called called content-___.php
			 * (where ___ is the post format) and that will be used instead.
			 */
			 $array = get_the_category();
			 $category_name = $array[0]->cat_name;
			get_template_part( 'content', $category_name );


		// End the loop.
		endwhile;
		?>



<?php get_footer(); ?>
