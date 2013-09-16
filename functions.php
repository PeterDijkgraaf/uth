<?php 

add_filter('next_posts_link_attributes', 'next_posts_link_attributes');

function next_posts_link_attributes() {
    return 'class="nextP"';
}

add_filter('previous_posts_link_attributes', 'prev_posts_link_attributes');

function prev_posts_link_attributes() {
    return 'class="prevP"';
}


register_sidebar(array('name'=>'mailchimp widget', 	
'before_title' => '<h3>', 	
'after_title' => '</h3 >',
 ));


?>