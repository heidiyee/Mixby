<?php
/*
Theme Name: Mixby Wordpress
Author: Heidi Yee
Description: Learning Wordpress using Mixby site by customizing new theme based on twentyfifteen theme
Version: 1.0.0
*/

get_header();
$post_slug = $post->post_name;
?>

<section class="hero <?php echo $post_slug ?>">
	<div class="container">
		<?php if (is_front_page()) : ?>
			<p class="headline">
				<?php echo get_field('hero_text'); ?>
			</p>
		<?php else : ?>

			<h2><?php echo the_title(); ?></h2>
		<?php endif; ?>

	</div>

</section>





<?php get_footer(); ?>
