<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * =========================================
 * ALMIELLA Language Switcher
 * Version: 4.1.0
 * =========================================
 */

function almiella_language_switcher_shortcode() {

    // Check WPML
    if (!function_exists('icl_get_languages')) {
        return '';
    }

    $languages = icl_get_languages('skip_missing=0&orderby=code');

    if (empty($languages)) {
        return '';
    }

    // Current Language
    $current = null;

    foreach ($languages as $language) {

        if (!empty($language['active'])) {

            $current = $language;

            break;

        }

    }

    if (!$current) {
        return '';
    }

    ob_start();

    ?>

    <div class="almiella-language">

        <button
            class="almiella-language-toggle"
            type="button"
            aria-expanded="false"
            aria-haspopup="true"
        >

            <span class="almiella-language-current">

                <?php echo esc_html(ucfirst(strtolower($current['code']))); ?>

            </span>

            <span class="almiella-language-arrow">

                ▼

            </span>

        </button>

        <div
            class="almiella-language-dropdown"
            role="menu"
        >

            <?php foreach ($languages as $language) : ?>

                <a
                    href="<?php echo esc_url($language['url']); ?>"
                    class="almiella-language-option<?php echo !empty($language['active']) ? ' is-active' : ''; ?>"
                    lang="<?php echo esc_attr($language['language_code']); ?>"
                    role="menuitem"
                >

                    <span class="almiella-language-name">

                        <?php echo esc_html($language['native_name']); ?>

                    </span>

                </a>

            <?php endforeach; ?>

        </div>

    </div>

    <?php

    return ob_get_clean();

}

add_shortcode(
    'almiella_language',
    'almiella_language_switcher_shortcode'
);