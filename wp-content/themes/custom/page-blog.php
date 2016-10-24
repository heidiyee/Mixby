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


<!-- Blog post section. If there are blog post, a new section will be made to show 4 posts at a time using Ajax Load More plugin -->
<?php
$the_query = new WP_Query( array( 'category_name' => 'blog-post'));

if ( $the_query->have_posts()) : ?>
	<section class="blog-posts">
		<div id="postings" class="container">
			<?php echo do_shortcode('[ajax_load_more repeater="template_blog_post" category="blog-post" order="ASC" orderby="date" posts_per_page="4" button_label="Show More" scroll="false"]'); ?>
		</div>
	</section>
<?php endif; wp_reset_postdata();?>


<?php get_footer(); ?>
