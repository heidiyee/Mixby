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

<?php if( have_rows('text_and_pics') ): ?>

    <?php while( have_rows('text_and_pics') ): the_row(); ?>
        <section class="text-and-pics">
            <div class="container">
                <p>
    				<?php echo get_sub_field('text'); ?>
    			</p>
    			<img src="<?php echo get_sub_field('first_image'); ?>" alt="" />
    			<img src="<?php echo get_sub_field('second_image'); ?>" alt="" />
            </div>
        </section>
    <?php endwhile; ?>
<?php endif; ?>

<section class="contact-info">
    <div class="container">
        <h2>Shoot Us an Email</h2>
        <p>
            <?php echo get_field('email'); ?>
        </p>
        <h2>Give Us a Jingle</h2>
        <p>
            <?php echo get_field('number'); ?>
        </p>
        <h2>Visit Our Office</h2>
        <p>
            <?php echo get_field('address'); ?>
        </p>
    </div>

    <img src="<?php echo get_field('map') ?>" alt="" />
</section>


<section class="learn-more">
    <div class="container">
        <h2><?php echo get_field('link_title'); ?></h2>
        <p>
            <?php echo get_field('link_text'); ?>
        </p>
        <a href="blog"><?php echo get_field('link'); ?></a>
    </div>
</section>


<?php get_footer(); ?>
