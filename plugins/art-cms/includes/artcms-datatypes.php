<?php

/*
 * Gallery CMS - Define datatypes (- custom page types, taxonomies & metaboxes).
 */


add_action( 'init', 'artcms_init' );
add_action( 'add_meta_boxes', 'artcms_add_meta' );




function artcms_init()
{
    artcms_register_post_types();
    artcms_register_taxonomies();
    // add column sorting?
}

function artcms_add_meta()
{
    artcms_add_metaboxes();
}







function artcms_register_post_types()
{


    $profilelabels = array(
        'name'               => __( 'Profiles', 'artcms' ),
        'singular_name'      => __( 'Profile', 'artcms' ),
        'add_new'            => __( 'New Profile', 'artcms' ),
        'add_new_item'       => __( 'Add New Profile', 'artcms' ),
        'edit_item'          => __( 'Edit Profile', 'artcms' ),
        'item_updated'       => __( 'Profile updated', 'artcms' ),
        'new_item'           => __( 'New Profile', 'artcms' ),
        'all_items'          => __( 'All Profiles', 'artcms' ),
        'view_item'          => __( 'View Profile', 'artcms' ),
        'view_items'         => __( 'View Profiles', 'artcms' ),
        'search_items'       => __( 'Search Profiles', 'artcms' ),
        'not_found'          => __( 'No Profiles found', 'artcms' ),
        'not_found_in_trash' => __( 'No Profiles found in Trash', 'artcms' ),
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
            'revisions',
            'custom-fields',
            'thumbnail',
            'page-attributes',
            'post-formats'
        ),
        'rewrite'      => array( 'slug' => 'profile' ),
        'show_in_rest' => true
    );

    register_post_type( 'artcms_profile', $profileargs );




    $worklabels = array(
        'name'               => __( 'Works', 'artcms' ),
        'singular_name'      => __( 'Work', 'artcms' ),
        'add_new'            => __( 'New Work', 'artcms' ),
        'add_new_item'       => __( 'Add New Work', 'artcms' ),
        'edit_item'          => __( 'Edit Work', 'artcms' ),
        'item_updated'       => __( 'Work updated', 'artcms' ),
        'new_item'           => __( 'New Work', 'artcms' ),
        'all_items'          => __( 'All Works', 'artcms' ),
        'view_item'          => __( 'View Work', 'artcms' ),
        'view_items'         => __( 'View Works', 'artcms' ),
        'search_items'       => __( 'Search Works', 'artcms' ),
        'not_found'          => __( 'No Works found', 'artcms' ),
        'not_found_in_trash' => __( 'No Works found in Trash', 'artcms' ),
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

    register_post_type( 'artcms_work', $workargs );




    $collectionlabels = array(
        'name'               => __( 'Collections', 'artcms' ),
        'singular_name'      => __( 'Collection', 'artcms' ),
        'add_new'            => __( 'New Collection', 'artcms' ),
        'add_new_item'       => __( 'Add New Collection', 'artcms' ),
        'edit_item'          => __( 'Edit Collection', 'artcms' ),
        'item_updated'       => __( 'Collection updated', 'artcms' ),
        'new_item'           => __( 'New Collection', 'artcms' ),
        'all_items'          => __( 'All Collections', 'artcms' ),
        'view_item'          => __( 'View Collection', 'artcms' ),
        'view_items'         => __( 'View Collections', 'artcms' ),
        'search_items'       => __( 'Search Collections', 'artcms' ),
        'not_found'          => __( 'No Collections found', 'artcms' ),
        'not_found_in_trash' => __( 'No Collections found in Trash', 'artcms' ),
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

    register_post_type( 'artcms_collection', $collectionargs );

}








function artcms_register_taxonomies()
{


    $grouplabels = array(
        'name'              => _x( 'Groups', 'taxonomy general name', 'artcms' ),
        'singular_name'     => _x( 'Group', 'taxonomy singular name', 'artcms' ),
        'search_items'      => __( 'Search Groups', 'artcms' ),
        'all_items'         => __( 'All Groups', 'artcms' ),
        'parent_item'       => __( 'Parent Group', 'artcms' ),
        'parent_item_colon' => __( 'Parent Group:', 'artcms' ),
        'edit_item'         => __( 'Edit Group', 'artcms' ),
        'update_item'       => __( 'Update Group', 'artcms' ),
        'add_new_item'      => __( 'Add new Group', 'artcms' ),
        'new_item_name'     => __( 'New Group name', 'artcms' ),
        'menu_name'         => __( 'Groups', 'artcms' ),
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

    register_taxonomy( 'artcms_group', [ 'artcms_profile', 'artcms_collection' ], $groupargs );




    $typelabels = array(
        'name'              => _x( 'Types', 'taxonomy general name', 'artcms' ),
        'singular_name'     => _x( 'Type', 'taxonomy singular name', 'artcms' ),
        'search_items'      => __( 'Search Types', 'artcms' ),
        'all_items'         => __( 'All Types', 'artcms' ),
        'parent_item'       => __( 'Parent Type', 'artcms' ),
        'parent_item_colon' => __( 'Parent Type:', 'artcms' ),
        'edit_item'         => __( 'Edit Type', 'artcms' ),
        'update_item'       => __( 'Update Type', 'artcms' ),
        'add_new_item'      => __( 'Add new Type', 'artcms' ),
        'new_item_name'     => __( 'New Type name', 'artcms' ),
        'menu_name'         => __( 'Types', 'artcms' ),
    );
    $typeargs = array(
        'hierarchical'      => true,
        'labels'            => $typelabels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'type' ],
        'show_in_rest'      => true
    );

    register_taxonomy( 'artcms_type', [ 'artcms_work' ], $typeargs );




    $labellabels = array(
        'name'              => _x( 'Labels', 'taxonomy general name', 'artcms' ),
        'singular_name'     => _x( 'Label', 'taxonomy singular name', 'artcms' ),
        'search_items'      => __( 'Search Labels', 'artcms' ),
        'all_items'         => __( 'All Labels', 'artcms' ),
        'parent_item'       => __( 'Parent Label', 'artcms' ),
        'parent_item_colon' => __( 'Parent Label:', 'artcms' ),
        'edit_item'         => __( 'Edit Label', 'artcms' ),
        'update_item'       => __( 'Update Label', 'artcms' ),
        'add_new_item'      => __( 'Add new Label', 'artcms' ),
        'new_item_name'     => __( 'New Label name', 'artcms' ),
        'menu_name'         => __( 'Labels', 'artcms' ),
    );
    $labelargs = array(
        'hierarchical'      => false,
        'labels'            => $labellabels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => [ 'slug' => 'label' ],
        'show_in_rest'      => true
    );

    register_taxonomy( 'artcms_label', [ 'artcms_work', 'artcms_collection' ], $labelargs );
   

}








function artcms_add_metaboxes()
{
    add_meta_box( 'artcms_profile_details', 'Details', 'artcms_profile_details_callback', [ 'artcms_profile' ], 'normal' );

    add_meta_box( 'artcms_work_meta', 'Meta', 'artcms_work_meta_callback', [ 'artcms_work' ], 'side', 'high' );

    add_meta_box( 'artcms_collection_info', 'Collection info', 'artcms_collection_info_callback', [ 'artcms_collection' ], 'side', 'high' );
    add_meta_box( 'artcms_collection_contributors', 'Featured Profiles', 'artcms_collection_contributors_callback', [ 'artcms_collection' ], 'normal' );
}



function artcms_profile_details_callback( $post )
{
    ?>

    <p>
        <label for=""></label>
    </p>

    <?php
}


function artcms_work_meta_callback( $post )
{
    ?>

    <p>
        <label for="artcms-txt-title">Title of piece:</label><br>
        <input name="artcms-txt-title" id="artcms-txt-title" type="text">
        <br>
        <label for="artcms-txt-artist">Artist's name:</label><br>
        <input name="artcms-txt-artist" id="artcms-txt-artist" type="text">
        <br>
        <label for="artcms-url-profile">Profile page:</label>
        <input name="artcms-url-profile" id="artcms-url-profile" type="url">
    </p>

    <p>
        <label for="artcms-num-year">Year:</label>
        <input name="artcms-num-year" id="artcms-num-year" type="number" step="1" value="2000" max="9999">
        <br>
        <label for="artcms-txt-location">Location of origin:</label><br>
        <input name="artcms-txt-location" id="artcms-txt-location" type="text">
    </p>

    <p>
        <label for="artcms-txt-genre">Genre:</label><br>
        <input name="artcms-txt-genre" id="artcms-txt-genre" type="text">
        <br>
        <label for="artcms-txt-medium">Medium:</label><br>
        <input name="artcms-txt-medium" id="artcms-txt-medium" type="text">
        <br>
        <label for="artcms-txt-size">Dimensions:</label><br>
        <input name="artcms-txt-size" id="artcms-txt-size" type="text">
        <br>
        <label for="artcms-txt-duration">Duration:</label><br>
        <input name="artcms-txt-duration" id="artcms-txt-duration" type="text">
    </p>

    <?php
}





function artcms_collection_info_callback( $post )
{
    ?>
    <p>
        <label for="artcms-date-start">Opening date:</label>
        <input name="artcms-date-start" id="artcms-date-start" type="date">
        <br>
        <label for="artcms-date-end">Closing date:</label>
        <input name="artcms-date-end" id="artcms-date-end" type="date">
    </p>
    <p>
        <label for="artcms-txt-location">Location:</label><br>
        <input name="artcms-txt-location" id="artcms-txt-location" type="text">
        <br>
        <label for="artcms-url-link">Web site:</label><br>
        <input name="artcms-url-link" id="artcms-url-link" type="url">
    </p>
    <?php
}





function artcms_collection_contributors_callback( $post )
{
    ?>
    <p>To add names of contributing artists.</p>
    <?php
}
