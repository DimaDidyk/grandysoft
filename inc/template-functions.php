<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package grandysoft
 */

/**
 * ACF - option pages
 */
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Team',
        'menu_title'	=> 'Team',
        'menu_slug' 	=> 'theme-team-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

//    acf_add_options_page(array(
//        'page_title' 	=> 'Team',
//        'menu_title'	=> 'Team',
//        'parent_slug'	=> 'team',
//        'capability'	=> 'edit_posts',
//        'redirect'		=> false
//    ));
}