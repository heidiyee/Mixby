<div class="blog-post">
	<p class='date'><?php echo get_the_date(); ?></p>
	<a href="<?php echo get_the_permalink()?>">
    	<h2><?php echo get_field('title'); ?></h2>
    	<img src="<?php echo get_field('image'); ?>" alt="" />
	</a>
</div>