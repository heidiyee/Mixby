<?php
/*
Theme Name: Mixby Wordpress
Author: Heidi Yee
Description: Learning Wordpress using Mixby site by customizing new theme based on twentyfifteen theme
Version: 1.0.0
*/
?>

    <section class="job-post">
        <div class="container">
            <p class="title"><?php echo get_field('job_title') ?></p>

            <pre class="content">
                <?php the_content(); ?>
            </pre>
            <a href="about-us">Back to About Us</a>
        </div>
    </section>
