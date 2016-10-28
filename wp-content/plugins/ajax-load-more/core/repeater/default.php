<div class="blog-post">
	<a href="<?php echo get_the_permalink()?>">
    	<div class="headings">
      		<p class='date'><?php echo get_the_date(); ?></p>
        	<h2><?php echo get_field('title'); ?></h2>
    	</div>
    	<img src="<?php echo get_field('image'); ?>" alt="" />
	</a>
</div>