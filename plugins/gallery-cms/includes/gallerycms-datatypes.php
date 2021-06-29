<?php

/*
 * Gallery CMS - Define datatypes (- custom page types, taxonomies & metaboxes).
 */


add_action( 'init', 'gallerycms_init' );
add_action( 'add_meta_boxes', 'gallerycms_add_meta' );




function gallerycms_init()
{
    gallerycms_register_post_types();
    gallerycms_register_taxonomies();
}

function gallerycms_add_meta()
{
    gallerycms_add_metaboxes();
}







function gallerycms_register_post_types()
{


    $profilelabels = array(
        'name'               => __( 'Profiles', 'gallerycms' ),
        'singular_name'      => __( 'Profile', 'gallerycms' ),
        'add_new'            => __( 'New Profile', 'gallerycms' ),
        'add_new_item'       => __( 'Add New Profile', 'gallerycms' ),
        'edit_item'          => __( 'Edit Profile', 'gallerycms' ),
        'item_updated'       => __( 'Profile updated', 'gallerycms' ),
        'new_item'           => __( 'New Profile', 'gallerycms' ),
        'all_items'          => __( 'All Profiles', 'gallerycms' ),
        'view_item'          => __( 'View Profile', 'gallerycms' ),
        'view_items'         => __( 'View Profiles', 'gallerycms' ),
        'search_items'       => __( 'Search Profiles', 'gallerycms' ),
        'not_found'          => __( 'No Profiles found', 'gallerycms' ),
        'not_found_in_trash' => __( 'No Profiles found in Trash', 'gallerycms' ),
    );
    $profileargs = array(
        'labels'       => $profilelabels,
        'menu_icon'    => 'dashicons-id-alt',
        'has_archive'  => true,
        'public'       => true,
        'hierarchical' => false,
        'show_ui'      => true,
        'show_in_menu' => true,
        'supports'     => array(
            'title',
            'editor',
            'excerpt',
            'custom-fields',
            'thumbnail',
            'page-attributes',
            'post-formats'
        ),
        'rewrite'      => array( 'slug' => 'profile' ),
        'show_in_rest' => true
    );

    register_post_type( 'gallerycms_profile', $profileargs );




    $worklabels = array(
        'name'               => __( 'Works', 'gallerycms' ),
        'singular_name'      => __( 'Work', 'gallerycms' ),
        'add_new'            => __( 'New Work', 'gallerycms' ),
        'add_new_item'       => __( 'Add New Work', 'gallerycms' ),
        'edit_item'          => __( 'Edit Work', 'gallerycms' ),
        'item_updated'       => __( 'Work updated', 'gallerycms' ),
        'new_item'           => __( 'New Work', 'gallerycms' ),
        'all_items'          => __( 'All Works', 'gallerycms' ),
        'view_item'          => __( 'View Work', 'gallerycms' ),
        'view_items'         => __( 'View Works', 'gallerycms' ),
        'search_items'       => __( 'Search Works', 'gallerycms' ),
        'not_found'          => __( 'No Works found', 'gallerycms' ),
        'not_found_in_trash' => __( 'No Works found in Trash', 'gallerycms' ),
    );
    $workargs = array(
        'labels'       => $worklabels,
        'menu_icon'    => 'dashicons-art',
        'has_archive'  => true,
        'public'       => true,
        'hierarchical' => true,
        'show_ui'      => true,
        'show_in_menu' => true,
        'supports'     => array(
            'title',
            'editor',
            'excerpt',
            'custom-fields',
            'thumbnail',
            'page-attributes',
            'post-formats'
        ),
        'rewrite'      => array( 'slug' => 'work' ),
        'show_in_rest' => true
    );

    register_post_type( 'gallerycms_work', $workargs );




    $collectionlabels = array(
        'name'               => __( 'Collections', 'gallerycms' ),
        'singular_name'      => __( 'Collection', 'gallerycms' ),
        'add_new'            => __( 'New Collection', 'gallerycms' ),
        'add_new_item'       => __( 'Add New Collection', 'gallerycms' ),
        'edit_item'          => __( 'Edit Collection', 'gallerycms' ),
        'item_updated'       => __( 'Collection updated', 'gallerycms' ),
        'new_item'           => __( 'New Collection', 'gallerycms' ),
        'all_items'          => __( 'All Collections', 'gallerycms' ),
        'view_item'          => __( 'View Collection', 'gallerycms' ),
        'view_items'         => __( 'View Collections', 'gallerycms' ),
        'search_items'       => __( 'Search Collections', 'gallerycms' ),
        'not_found'          => __( 'No Collections found', 'gallerycms' ),
        'not_found_in_trash' => __( 'No Collections found in Trash', 'gallerycms' ),
    );
    $collectionargs = array(
        'labels'       => $collectionlabels,
        'menu_icon'    => 'dashicons-layout',
        'has_archive'  => true,
        'public'       => true,
        'hierarchical' => true,
        'show_ui'      => true,
        'show_in_menu' => true,
        'supports'     => array(
            'title',
            'editor',
            'excerpt',
            'custom-fields',
            'thumbnail',
            'page-attributes',
            'post-formats'
        ),
        'rewrite' => array( 'slug' => 'collection' ),
        'show_in_rest' => true
    );

    register_post_type( 'gallerycms_exhibit', $collectionargs );
}








function gallerycms_register_taxonomies()
{


    $catlabels = array(
        'name'              => _x( 'Categories', 'taxonomy general name', 'gallerycms' ),
        'singular_name'     => _x( 'Category', 'taxonomy singular name', 'gallerycms' ),
        'search_items'      => __( 'Search Categories', 'gallerycms' ),
        'all_items'         => __( 'All Categories', 'gallerycms' ),
        'parent_item'       => __( 'Parent Category', 'gallerycms' ),
        'parent_item_colon' => __( 'Parent Category:', 'gallerycms' ),
        'edit_item'         => __( 'Edit Category', 'gallerycms' ),
        'update_item'       => __( 'Update Category', 'gallerycms' ),
        'add_new_item'      => __( 'Add new Category', 'gallerycms' ),
        'new_item_name'     => __( 'New Category name', 'gallerycms' ),
        'menu_name'         => __( 'Category', 'gallerycms' ),
    );
    $catargs = array(
        'hierarchical'      => true,
        'labels'            => $catlabels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'category' ],
        'show_in_rest'      => true
    );

    register_taxonomy( 'gallerycms_category', [ 'gallerycms_profile', 'gallerycms_work', 'gallerycms_collection' ], $catargs );




    $grouplabels = array(
        'name'              => _x( 'Groups', 'taxonomy general name', 'gallerycms' ),
        'singular_name'     => _x( 'Group', 'taxonomy singular name', 'gallerycms' ),
        'search_items'      => __( 'Search Groups', 'gallerycms' ),
        'all_items'         => __( 'All Groups', 'gallerycms' ),
        'parent_item'       => __( 'Parent Group', 'gallerycms' ),
        'parent_item_colon' => __( 'Parent Group:', 'gallerycms' ),
        'edit_item'         => __( 'Edit Group', 'gallerycms' ),
        'update_item'       => __( 'Update Group', 'gallerycms' ),
        'add_new_item'      => __( 'Add new Group', 'gallerycms' ),
        'new_item_name'     => __( 'New Group name', 'gallerycms' ),
        'menu_name'         => __( 'Group', 'gallerycms' ),
    );
    $groupargs = array(
        'hierarchical'      => true,
        'labels'            => $grouplabels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'group' ],
        'show_in_rest'      => true
    );

    register_taxonomy( 'gallerycms_group', [ 'gallerycms_profile', 'gallerycms_exhibit', 'gallerycms_collection' ], $groupargs );




    $mediumlabels = array(
        'name'              => _x( 'Medium', 'taxonomy general name', 'gallerycms' ),
        'singular_name'     => _x( 'Medium', 'taxonomy singular name', 'gallerycms' ),
        'search_items'      => __( 'Search Medium', 'gallerycms' ),
        'all_items'         => __( 'All Medium', 'gallerycms' ),
        'parent_item'       => __( 'Parent Medium', 'gallerycms' ),
        'parent_item_colon' => __( 'Parent Medium:', 'gallerycms' ),
        'edit_item'         => __( 'Edit Medium', 'gallerycms' ),
        'update_item'       => __( 'Update Medium', 'gallerycms' ),
        'add_new_item'      => __( 'Add new Medium', 'gallerycms' ),
        'new_item_name'     => __( 'New Medium name', 'gallerycms' ),
        'menu_name'         => __( 'Medium', 'gallerycms' ),
    );
    $mediumargs = array(
        'hierarchical'      => true,
        'labels'            => $mediumlabels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'medium' ],
        'show_in_rest'      => true
    );

    register_taxonomy( 'gallerycms_medium', [ 'gallerycms_work' ], $mediumargs );

}








function gallerycms_add_metaboxes()
{
    add_meta_box( 'gallerycms_work_meta', 'Meta', 'gallerycms_work_meta_callback', [ 'gallerycms_work' ], 'side', 'high' );

    add_meta_box( 'gallerycms_collection_info', 'Collection info', 'gallerycms_collection_info_callback', [ 'gallerycms_exhibit', 'gallerycms_collection' ], 'side', 'high' );
    add_meta_box( 'gallerycms_collection_contributors', 'Featured Profiles', 'gallerycms_collection_contributors_callback', [ 'gallerycms_exhibit', 'gallerycms_collection' ], 'normal' );
}





function gallerycms_work_meta_callback( $post )
{
    ?>
    <p>
        <label for="gallerycms-txt-title">Title of piece:</label><br>
        <input name="gallerycms-txt-title" id="gallerycms-txt-title" type="text">
        <br>
        <label for="gallerycms-txt-artist">Artist's name:</label><br>
        <input name="gallerycms-txt-artist" id="gallerycms-txt-artist" type="text">
        <br>
        <label for="gallerycms-url-profile">Profile page:</label>
        <input name="gallerycms-url-profile" id="gallerycms-url-profile" type="url">
    </p>
    <p>
        <label for="gallerycms-num-year">Year:</label>
        <input name="gallerycms-num-year" id="gallerycms-num-year" type="number" step="1" value="2000" max="9999">
        <br>
        <label for="gallerycms-txt-location">Location of origin:</label><br>
        <input name="gallerycms-txt-location" id="gallerycms-txt-location" type="text">
    </p>
    <p>
        <label for="gallerycms-txt-media">Media:</label><br>
        <input name="gallerycms-txt-media" id="gallerycms-txt-media" type="text">
        <br>
        <label for="gallerycms-txt-size">Dimensions:</label><br>
        <input name="gallerycms-txt-size" id="gallerycms-txt-size" type="text">
        <br>
        <label for="gallerycms-duration">Duration:</label><br>
        <input name="gallerycms-size" id="gallerycms-size" type="text">
    </p>
    <?php
}





function gallerycms_collection_info_callback( $post )
{
    ?>
    <p>
        <label for="gallerycms-date-start">Opening date:</label>
        <input name="gallerycms-date-start" id="gallerycms-date-start" type="date">
        <br>
        <label for="gallerycms-date-end">Closing date:</label>
        <input name="gallerycms-date-end" id="gallerycms-date-end" type="date">
    </p>
    <p>
        <label for="gallerycms-txt-location">Location:</label><br>
        <input name="gallerycms-txt-location" id="gallerycms-txt-location" type="text">
        <br>
        <label for="gallerycms-url-link">Web site:</label><br>
        <input name="gallerycms-url-link" id="gallerycms-url-link" type="url">
    </p>
    <?php
}





function gallerycms_collection_contributors_callback( $post )
{
    ?>
    <p>To add names of contributing artists.</p>
    <?php
}
