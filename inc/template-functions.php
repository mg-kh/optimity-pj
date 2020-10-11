<?php

/**
 * Page Support
 */

function wpdocs_remove_page_support() {
    remove_post_type_support( 'page', 'comments' );
    remove_post_type_support( 'page', 'author' );
    remove_post_type_support( 'page', 'editor' );
}
add_action( 'init', 'wpdocs_remove_page_support', 100 );