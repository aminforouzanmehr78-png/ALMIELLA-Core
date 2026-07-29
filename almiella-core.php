<?php
/**
 * Plugin Name: ALMIELLA Core
 * Plugin URI: https://almiella.com
 * Description: Core features for the ALMIELLA platform.
 * Version: 1.0.0
 * Author: ALMIELLA
 * Author URI: https://almiella.com
 * License: GPL2
 * Text Domain: almiella-core
 */

if (!defined('ABSPATH')) {
    exit;
}

define('ALMIELLA_CORE_VERSION', '1.0.0');
define('ALMIELLA_CORE_PATH', plugin_dir_path(__FILE__));
define('ALMIELLA_CORE_URL', plugin_dir_url(__FILE__));

require_once ALMIELLA_CORE_PATH . 'includes/loader.php';