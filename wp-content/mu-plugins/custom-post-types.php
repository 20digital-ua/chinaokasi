<?php
/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 20.01.2019
 * Time: 17:17
 */



function costom_post_types(){
    // register_post_type('course',array(
    //     'has_archive'=> true,
    //     'supports'=>array(
    //       'title',
    //       'editor',
    //       'excerpt',
    //       'thumbnail'
    //     ),
    //     'rewrite'=>array(
    //       'slug'=>'course'
    //     ),
    //     'public'=>true,
    //     'menu_icon' => 'dashicons-star-filled',
    //     'labels' => array(
    //       'name'=>'Courses',
    //       'add_new_item'=>'Add new course',
    //       'edit_item'=>'Edit cours',
    //       'all_items'=>'All courses',
    //       'singular_name'=>'Cours'

    //     )
    // ));
    register_post_type('podcast',array(
        'has_archive'=> true,
        'supports'=>array(
          'title',
          'editor',
          'excerpt',
          'thumbnail'
        ),
        'rewrite'=>array(
          'slug'=>'podcasts'
        ),
        'public'=>true,
        'menu_icon' => 'dashicons-playlist-audio',
        'labels' => array(
          'name'=>'Podcasts',
          'add_new_item'=>'Add new podcast',
          'edit_item'=>'Edit podcast',
          'all_items'=>'All podcasts',
          'singular_name'=>'Podcast'

        )
    ));
}


add_action('init','costom_post_types');