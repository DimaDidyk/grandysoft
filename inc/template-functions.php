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
}

add_action('init', 'work_post_init');
function work_post_init(){
    register_post_type('work', array(
        'labels'             => array(
            'name'               => 'Works', // Основное название типа записи
//            'singular_name'      => 'Книга', // отдельное название записи типа Book
//            'add_new'            => 'Добавить новую',
//            'add_new_item'       => 'Добавить новую книгу',
//            'edit_item'          => 'Редактировать книгу',
//            'new_item'           => 'Новая книга',
//            'view_item'          => 'Посмотреть книгу',
//            'search_items'       => 'Найти книгу',
//            'not_found'          =>  'Книг не найдено',
//            'not_found_in_trash' => 'В корзине книг не найдено',
//            'parent_item_colon'  => '',
//            'menu_name'          => 'Книги'

        ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => true,
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array('title','editor','author','thumbnail','excerpt')
    ) );
}