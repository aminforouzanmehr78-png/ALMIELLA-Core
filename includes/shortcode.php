<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * ALMIELLA Core Shortcode
 * Version: 1.0.0
 */


/**
 * Render ALMIELLA Core Shortcode
 */
function almiella_core_shortcode() {

    ob_start();

    ?>

    <div class="almiella-core-badge">
        ✨ ALMIELLA Core Active
    </div>

    <?php

    return ob_get_clean();

}


/**
 * Register Shortcode
 */
add_shortcode(
    'almiella_core',
    'almiella_core_shortcode'
);