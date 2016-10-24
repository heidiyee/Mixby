<?php
/*
Theme Name: Mixby Wordpress
Author: Heidi Yee
Description: Learning Wordpress using Mixby site by customizing new theme based on twentyfifteen theme
Version: 1.0.0
*/
?>

    <section class="blog-posts top-padding">
        <div class="container">
            <p class="date">
                <?php echo get_the_date(); ?>
            </p>
            <p class="title"><?php echo get_field('title') ?></p>
            <img src="<?php echo get_field('image') ?>" alt="" />

            <pre class="content">
                <?php the_content(); ?>
            </pre>
            <a href="blog">Back to Blog</a>
        </div>
    </section>
