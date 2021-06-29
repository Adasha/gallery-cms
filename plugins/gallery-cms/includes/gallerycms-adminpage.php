<?php

/*
 * Gallery CMS - Build Admin Control Panel
 */


add_action('admin_menu', 'gallerycms_build_ctrl_panel');


function gallerycms_build_ctrl_panel()
{
    add_menu_page(
        'Gallery CMS Options',
        'Gallery CMS',
        'manage_options',
        plugin_dir_path(__FILE__) . 'gallerycms-controlpanel.php'
    );
}
