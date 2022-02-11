<?php
/**
 * Functions which enhance the theme by utilizing the block editor
 *
 * @package Fusion_Clothing
 */
function fc_enqueue_block_editor_assets() {
    wp_enqueue_script(
        'block-editor-script',
        get_template_directory_uri() . '/assets/js/block-editor.js',
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
        filemtime( get_template_directory() . '/assets/js/block-editor.js' )
    );
}
add_action( 'enqueue_block_editor_assets', 'fc_enqueue_block_editor_assets' );

function fc_enqueue_block_assets() {
    wp_enqueue_style( 
    'block-editor-style', 
    get_template_directory_uri() . '/assets/css/block-editor.css' 
    );
}
add_action( 'enqueue_block_assets', 'fc_enqueue_block_assets' );