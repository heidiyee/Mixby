<?php
/*
Theme Name: Mixby Wordpress
Author: Heidi Yee
Description: Learning Wordpress using Mixby site by customizing new theme based on twentyfifteen theme
Version: 1.0.0
*/

// this is for individual team member's page
?>



    <section class="team-members">
        <div class="container">
            <p class="title"><?php echo get_field('team_member_title') ?></p>
            <h1><?php echo get_field('team_member_name') ?></h1>
            <img src="<?php echo get_field('team_member_picture') ?>" alt="" />
            <div class="content">
                <?php the_content(); ?>
            </div>
            <a href="about-us">Back to About Us</a>
        </div>
    </section>
