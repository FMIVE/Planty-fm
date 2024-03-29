<?php
// Exit if accessed directly
if (!defined('ABSPATH')) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')) :
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css'))
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('child_theme_configurator_css')) :
    function child_theme_configurator_css()
    {
        wp_enqueue_style('chld_thm_cfg_child', trailingslashit(get_stylesheet_directory_uri()) . 'style.css', array('astra-theme-css'));
    }
endif;
add_action('wp_enqueue_scripts', 'child_theme_configurator_css', 10);
// hook //
if (is_user_logged_in()) :

    function ajouter_lien_admin($items, $args)
    {
        if ($args->theme_location == 'primary') {
            $items .= '<li id="menu-item-923" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-923"><a href="http://localhost:10016/wp-admin" class="menu-link">Admin</a></li>';
        }
        return $items;
    }
    add_filter('wp_nav_menu_items', 'ajouter_lien_admin', 10, 2);
endif; 

// END ENQUEUE PARENT ACTION