<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * ALMIELLA Core Loader
 * Version: 1.0.0
 */


/**
 * Load Core Classes
 */
require_once ALMIELLA_CORE_PATH . 'includes/class-almiella-core.php';
require_once ALMIELLA_CORE_PATH . 'includes/class-almiella-config.php';
require_once ALMIELLA_CORE_PATH . 'includes/class-almiella-assets.php';



/**
 * Load Helpers
 */
require_once ALMIELLA_CORE_PATH . 'includes/helpers.php';



/**
 * Load Modules
 */
require_once ALMIELLA_CORE_PATH . 'includes/enqueue.php';
require_once ALMIELLA_CORE_PATH . 'includes/language-switcher.php';
require_once ALMIELLA_CORE_PATH . 'includes/shortcode.php';



/**
 * Load Elementor Integration
 */
function almiella_load_elementor_integration() {


    if (!defined('ELEMENTOR_VERSION')) {

        return;

    }


    require_once ALMIELLA_CORE_PATH . 'elementor/class-elementor-loader.php';


    if (class_exists('ALMIELLA_Elementor_Loader')) {

        new ALMIELLA_Elementor_Loader();

    }


}


add_action(
    'elementor/loaded',
    'almiella_load_elementor_integration'
);



/**
 * Initialize ALMIELLA Core
 */
function almiella_core_init() {


    if (class_exists('ALMIELLA_Core')) {


        $core = new ALMIELLA_Core();


        $core->init();


    }


}


add_action(
    'plugins_loaded',
    'almiella_core_init'
);