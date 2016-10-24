<?php
/*
Theme Name: Mixby Wordpress
Author: Heidi Yee
Description: Learning Wordpress using Mixby site by customizing new theme based on twentyfifteen theme
Version: 1.0.0
*/

get_header(); ?>

	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title"><?php echo 'Oops! That page can&rsquo;t be found.'; ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentyfifteen' ); ?></p>

			<?php get_search_form(); ?>
		</div><!-- .page-content -->
	</section><!-- .error-404 -->

<?php get_footer(); ?>
