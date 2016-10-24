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

				<h1><?php echo the_title(); ?></h1>
			<?php endif; ?>

		</div>

	</section>

	<?php if( have_rows('slides') ): ?>
		<div class="sticky-section">

		<?php while( have_rows('slides') ): the_row(); ?>
			<section class="slides" style="background-image: url(<?php the_sub_field('hand_image') ?>) , url(<?php the_sub_field('slide_background_image') ?>) ">

				<div class="container">
					<h2 class='offscreen'><?php echo get_field(slide_title); ?></h2>
					<div class="slide-content">
						<img src="<?php the_sub_field('icon') ?>" alt="" />
						<p>
							<?php the_sub_field('headline'); ?>
						</p>
					</div>
				</div>
		</section>
		<?php endwhile; ?>

	</div>
	<?php endif; ?>

	<section class="text-and-pics">
		<div class="container">
			<p>
				<?php echo get_field('text_for_pics'); ?>
			</p>
			<img src="<?php echo get_field('pic_first_image'); ?>" alt="" />
			<img src="<?php echo get_field('pics_second_image'); ?>" alt="" />
		</div>
	</section>

	<section class="learn-more">
		<div class="container">
			<h2><?php echo get_field('link_title'); ?></h2>
			<p>
				<?php echo get_field('link_text'); ?>
			</p>
			<a href="#"><?php echo get_field('link'); ?></a>
		</div>
	</section>




<?php get_footer(); ?>
