<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * ALMIELLA Module Assets Loader
 * Version: 2.0.0
 */


/**
 * Enqueue Language Module Assets
 */
function almiella_language_enqueue_assets() {


    /**
     * Language CSS
     */
    wp_enqueue_style(
        'almiella-language-style',
        ALMIELLA_CORE_URL . 'assets/css/almiella-language.css',
        array(),
        ALMIELLA_CORE_VERSION
    );


    /**
     * Language JS
     */
    wp_enqueue_script(
        'almiella-language-script',
        ALMIELLA_CORE_URL . 'assets/js/almiella-language.js',
        array('jquery'),
        ALMIELLA_CORE_VERSION,
        true
    );


}


add_action(
    'wp_enqueue_scripts',
    'almiella_language_enqueue_assets'
);