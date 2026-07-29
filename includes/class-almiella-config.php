<?php

if (!defined('ABSPATH')) {
    exit;
}


/**
 * ALMIELLA Configuration System
 * Version: 2.0.0
 */


class ALMIELLA_Config {


    /**
     * Configuration Storage
     */
    private static $config = array();



    /**
     * Constructor
     */
    public function __construct() {

        $this->define_config();

    }



    /**
     * Define Core Configurations
     */
    private function define_config() {


        if (!defined('ALMIELLA_ENV')) {

            define(
                'ALMIELLA_ENV',
                'production'
            );

        }


        if (!defined('ALMIELLA_DEBUG')) {

            define(
                'ALMIELLA_DEBUG',
                false
            );

        }


        self::$config = array(

            'version' => ALMIELLA_CORE_VERSION,

            'environment' => ALMIELLA_ENV,

            'debug' => ALMIELLA_DEBUG,


            /*
             * Brand
             */

            'brand' => array(

                'name' => 'ALMIELLA',

                'website' => 'https://almiella.com'

            ),



            /*
             * Modules
             */

            'modules' => array(

                'shortcode' => true,

                'language' => true,

                'dark_mode' => false,

                'ai_tools' => false

            )


        );


    }



    /**
     * Get Configuration
     */
    public static function get($key) {


        return self::$config[$key] ?? null;


    }



    /**
     * Check Module Status
     */
    public static function module_enabled($module) {


        return self::$config['modules'][$module] ?? false;


    }


}