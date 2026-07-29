<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * =========================================
 * ALMIELLA Elementor Loader
 * Version: 1.0.0
 * =========================================
 */


class ALMIELLA_Elementor_Loader {


    /**
     * Constructor
     */
    public function __construct() {


        add_action(
            'elementor/widgets/register',
            [$this, 'register_widgets']
        );


    }



    /**
     * Register ALMIELLA Widgets
     */
    public function register_widgets($widgets_manager) {


        require_once ALMIELLA_CORE_PATH . 'elementor/widgets/class-language-switcher.php';


        $widgets_manager->register(
            new \ALMIELLA_Language_Switcher()
        );


    }


}


/**
 * Initialize Elementor Loader
 */
new ALMIELLA_Elementor_Loader();