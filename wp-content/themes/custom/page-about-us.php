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
	        <section class="text-and-pics extra-padding">
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

	<section class="events">
		<div class="container">
			<h2>News &amp; Events</h2>

			<?php if (have_rows('news_and_events')) : ?>
				<div class="owl-carousel">

				<?php while( have_rows('news_and_events')) : the_row(); ?>

					<div class="slides">
						<p class="date">
							<?php echo get_sub_field('event_date'); ?>
						</p>
						<h3><?php echo get_sub_field('event_name'); ?> </h3>
					</div>
				<?php endwhile; ?>
				</div>

				<a href="#">View All Stories</a>
				<hr>
			<?php endif; ?>

			<p>
				<?php echo get_field('sign_up') ?>
			</p>
			<form>
				<input type="text" name="email" value="" placeholder="Enter Your Email Address">
			</form>
			<a href="#">Submit</a>

		</div>
	</section>


	<!--  Team section. If there are post of team memebers, this section will list them off and link to individual pages-->
	<section class="team">
		<div class="container">
			<h2>Team</h2>
			<p>
				<?php echo get_field('team_text') ?>
			</p>
			<?php
			$the_query = new WP_Query( array( 'category_name' => 'team-member', 'posts_per_page' => 20, 'orderby' => 'date', 'order' => 'ASC') );

			if ( $the_query->have_posts()) : ?>
				<ul>
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<a href="<?php echo get_the_permalink()?>" rel="bookmark">
							<li class="team-member">

								<img src="<?php echo get_field('team_member_picture')?>" alt="<?php echo get_field('team_member_name') ?>" />
								<h3><?php echo get_field('team_member_name') ?></h3>
								<p>
									<?php echo get_field('team_member_title') ?>
								</p>

							</li>
						</a>
					<?php endwhile; ?>
				</ul>
		<?php else :
			//no posts ?>
		<?php endif; wp_reset_postdata();?>

		</div>
	</section>

	<section class="careers">
		<div class="container">
			<h2>Careers</h2>

			<!-- if jobs are available, they will be listed in this section -->
			<?php
			$the_query = new WP_Query( array( 'category_name' => 'job-posting', 'posts_per_page' => 20, 'orderby' => 'date', 'order' => 'ASC') );

			if ( $the_query->have_posts()) : ?>
			<ul>
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<a href="<?php echo get_the_permalink()?>" >
						<li class="job">
							<?php echo get_field('job_title') ?>
						</li>
					</a>
				<?php endwhile; ?>
			</ul>
			<hr>

			<?php else :
				//no posts ?>
			<?php endif; wp_reset_postdata();?>
			<p>
				Interested in being part of this amazing bunch? Drop us a note at sayhey@artifacttech.com. We’re always looking for new talent to join our team of All Stars.
			</p>
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
