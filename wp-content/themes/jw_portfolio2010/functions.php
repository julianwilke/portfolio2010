<?php

// ===============
// = ARCHIVE.PHP =
// ===============

/**
 * Checks if the current entry is the first one, which requiers special css-styling.
 *
 * If it is the first entry the id is echoed, otherwise an empty string.
 *
 * Requires <?php $post_nr_in_loop = 1;?> before the start of the loop to initialize the counter.
 *
 * Used in: archive.php
 *
 * @author Julian Wilke
 **/
function first_post_check() {
    
    $id_name = 'first-post';
    global $post_nr_in_loop;
    
    if ($post_nr_in_loop === 1) {
        echo(' id="' . $id_name . '" ');
        $post_nr_in_loop++;
    } else {
        echo('');
        $post_nr_in_loop++;
    }        
}


/**
 * Replaces the [...] at the end of an excerpt with another string.
 *
 * @return The String to show at the end of an excerpt
 * @author Julian Wilke
 **/
function new_excerpt_more($more) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');


?>