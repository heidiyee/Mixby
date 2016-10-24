<?php


//query for posts - DO NOT DELETE
$the_query = new WP_Query( array( 'category_name' => 'index', 'posts_per_page' => 20 ) );

if ( $the_query->have_posts()) :
    echo 'yes, there are posts <br/>';
    while ( $the_query->have_posts() ) :
        $the_query->the_post();
        echo get_the_content();
        $string .= '<li><a href="' . get_the_permalink() .'" rel="bookmark">' . get_the_title() .'</a></li>';
    endwhile;

else :
    //no posts
endif;
wp_reset_postdata();


if (has_children()) :
    echo 'yes';
else :
    echo 'no';
endif;
// Start the loop for posts
while ( have_posts() ) : the_post();

    // Include the post content template.
    get_template_part( 'content', 'post' );


// End the loop.
endwhile;
?>
