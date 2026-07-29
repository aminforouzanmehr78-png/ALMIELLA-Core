<?php

if (!defined('ABSPATH')) {
    exit;
}


/**
 * =========================================
 * ALMIELLA Assets Manager
 * Version: 1.2.0
 * =========================================
 */


class ALMIELLA_Assets {



    /**
     * Constructor
     */
    public function __construct() {


        add_action(

            'wp_enqueue_scripts',

            [$this, 'enqueue_assets']

        );


    }






    /**
     * Load CSS & JS
     */
    public function enqueue_assets() {



        /**
         * Core CSS
         */
        wp_enqueue_style(

            'almiella-core-style',

            ALMIELLA_CORE_URL . 'assets/css/almiella-core.css',

            [],

            ALMIELLA_CORE_VERSION

        );







        /**
         * Design System CSS
         */
        wp_enqueue_style(

            'almiella-design-system',

            ALMIELLA_CORE_URL . 'assets/css/almiella-design.css',

            [

                'almiella-core-style'

            ],

            ALMIELLA_CORE_VERSION

        );







        /**
         * Language Switcher CSS
         */
        wp_enqueue_style(

            'almiella-language-switcher',

            ALMIELLA_CORE_URL . 'assets/css/almiella-language-switcher.css',

            [],

            ALMIELLA_CORE_VERSION

        );







        /**
         * Core JS
         */
        wp_enqueue_script(

            'almiella-core-script',

            ALMIELLA_CORE_URL . 'assets/js/almiella-core.js',

            [],

            ALMIELLA_CORE_VERSION,

            true

        );







        /**
         * Language Widget JS
         */
        wp_enqueue_script(

            'almiella-language-widget',

            ALMIELLA_CORE_URL . 'assets/js/almiella-language-widget.js',

            [

                'jquery'

            ],

            ALMIELLA_CORE_VERSION,

            true

        );


    }



}