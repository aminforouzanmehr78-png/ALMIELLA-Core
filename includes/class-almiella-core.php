<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * ALMIELLA Core Engine
 */

class ALMIELLA_Core {


    /**
     * Initialize Core
     */
    public function init() {

        $this->load_dependencies();

        do_action('almiella_core_loaded');

    }


    /**
     * Load Core Features
     */
    private function load_dependencies() {


        $modules = array(
            'ALMIELLA_Config',
            'ALMIELLA_Assets'
        );


        foreach ($modules as $module) {

            if (class_exists($module)) {

                new $module();

            }

        }

    }


}