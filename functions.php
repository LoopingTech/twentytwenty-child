<?php

/**
 * Register and Enqueue Styles.
 */
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    $parenthandle = 'parent-style';
    $theme = wp_get_theme();
    wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css', 
        array(), 
        $theme->parent()->get('Version')
    );
    wp_enqueue_style( 'child-style', get_stylesheet_uri(),
        array( $parenthandle ),
        $theme->get('Version') // this only works if you have Version in the style header
    );
}

/**
 * Remove unnecessary functionality from Twenty Twenty (parent theme)
 */
add_action( 'after_setup_theme', 'remove_parent_functionality' );
function remove_parent_functionality() {
    // Add remove_action() here
}

/*
* Enqueue Google fonts for the block editor.
*/
add_action( 'enqueue_block_editor_assets', 'my_theme_block)_editor_fonts' );
function theme_block_editor_fonts() {

    wp_enqueue_style( 'theme-block-editor-fonts', 'URL' );
    
}

/**
 * 
 */
add_action( 'after_setup_theme', 'my_theme_setup' );_
function theme_setup() {

    // This theme styles the visual editor to resemble the theme style.
    add_editor_style( array( 'inc/editor-style.css' ) );
    add_theme_support( 'editor-styles' );

    // Enable block styles on the front end
    add_theme_support( 'wp-block-styles' );

}