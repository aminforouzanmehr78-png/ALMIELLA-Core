<?php

if (!defined('ABSPATH')) {
    exit;
}

/**
 * =========================================
 * ALMIELLA Language Switcher Widget
 * Version: 3.2.0
 * =========================================
 */

class ALMIELLA_Language_Switcher extends \Elementor\Widget_Base
{

    /**
     * Widget Name
     */
    public function get_name()
    {
        return 'almiella_language_switcher';
    }

    /**
     * Widget Title
     */
    public function get_title()
    {
        return 'ALMIELLA Language Switcher';
    }

    /**
     * Widget Icon
     */
    public function get_icon()
    {
        return 'eicon-globe';
    }

    /**
     * Widget Category
     */
    public function get_categories()
    {
        return [
            'general'
        ];
    }

    /**
     * Register Controls
     */
    protected function register_controls()
    {

        $this->register_content_controls();

        $this->register_button_controls();

        $this->register_hover_controls();

        $this->register_glass_controls();

        $this->register_dropdown_controls();

    }



	    /**
     * =========================================
     * Content Controls
     * =========================================
     */
    private function register_content_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => 'Language Settings',
                'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'layout',
            [
                'label'   => 'Layout',
                'type'    => \Elementor\Controls_Manager::SELECT,
                'default' => 'dropdown',
                'options' => [
                    'dropdown' => 'Dropdown',
                    'inline'   => 'Inline',
                ],
            ]
        );

        $this->add_control(
            'show_name',
            [
                'label'        => 'Show Language Name',
                'type'         => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        $this->add_control(
            'show_arrow',
            [
                'label'        => 'Show Arrow',
                'type'         => \Elementor\Controls_Manager::SWITCHER,
                'return_value' => 'yes',
                'default'      => 'yes',
            ]
        );

        $this->end_controls_section();

    }

    /**
     * =========================================
     * Button Style Controls
     * =========================================
     */
    private function register_button_controls()
    {

        $this->start_controls_section(
            'button_style',
            [
                'label' => 'Button Style',
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'button_background',
            [
                'label' => 'Background',
                'type'  => \Elementor\Controls_Manager::COLOR,
                'default' => 'rgba(255,255,255,0.08)',
                'selectors' => [
                    '{{WRAPPER}} .almiella-language-trigger' =>
                        'background: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'button_text_color',
            [
                'label' => 'Text Color',
                'type'  => \Elementor\Controls_Manager::COLOR,
                'default' => '#FFFFFF',
                'selectors' => [
                    '{{WRAPPER}} .language-code' =>
                        'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'     => 'button_typography',
                'selector' => '{{WRAPPER}} .language-code',
            ]
        );

        $this->add_responsive_control(
            'button_padding',
            [
                'label' => 'Padding',
                'type'  => \Elementor\Controls_Manager::DIMENSIONS,
                'size_units' => ['px','em','%'],
                'selectors' => [
                    '{{WRAPPER}} .almiella-language-trigger' =>
                        'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'button_border',
                'selector' => '{{WRAPPER}} .almiella-language-trigger',
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'button_shadow',
                'selector' => '{{WRAPPER}} .almiella-language-trigger',
            ]
        );

        $this->end_controls_section();

    }


	    /**
     * =========================================
     * Hover Controls
     * =========================================
     */
    private function register_hover_controls()
    {

        $this->start_controls_section(
            'hover_style',
            [
                'label' => 'Hover Style',
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'hover_background',
            [
                'label' => 'Background',
                'type'  => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .almiella-language-trigger:hover' =>
                        'background: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'hover_text_color',
            [
                'label' => 'Text Color',
                'type'  => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .almiella-language-trigger:hover .language-code' =>
                        'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'hover_glow',
            [
                'label' => 'Glow Color',
                'type'  => \Elementor\Controls_Manager::COLOR,
                'default' => '#78DCFF',
                'selectors' => [
                    '{{WRAPPER}} .almiella-language-trigger:hover' =>
                        'box-shadow:0 0 25px {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_section();

    }

    /**
     * =========================================
     * Glass Controls
     * =========================================
     */
    private function register_glass_controls()
    {

        $this->start_controls_section(
            'glass_style',
            [
                'label' => 'Glass Effect',
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'glass_blur',
            [
                'label' => 'Blur',
                'type'  => \Elementor\Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 40,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .almiella-language-trigger' =>
                        'backdrop-filter:blur({{SIZE}}px);',
                ],
            ]
        );

        $this->end_controls_section();

    }

    /**
     * =========================================
     * Dropdown Controls
     * =========================================
     */
    private function register_dropdown_controls()
    {

        $this->start_controls_section(
            'dropdown_style',
            [
                'label' => 'Dropdown Style',
                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'dropdown_background',
            [
                'label' => 'Background',
                'type'  => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .almiella-language-menu' =>
                        'background: {{VALUE}};',
                ],
            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'dropdown_shadow',
                'selector' => '{{WRAPPER}} .almiella-language-menu',
            ]
        );

        $this->end_controls_section();

    }



	    /**
     * =========================================
     * Render Widget
     * =========================================
     */
    protected function render()
    {

        if (!function_exists('icl_get_languages')) {
            return;
        }

        $settings = $this->get_settings_for_display();

        $languages = icl_get_languages('skip_missing=0&orderby=code');

        if (empty($languages)) {
            return;
        }

        $current = null;

        foreach ($languages as $language) {

            if (!empty($language['active'])) {
                $current = $language;
                break;
            }

        }

        if (!$current) {
            return;
        }

        ?>

        <div class="almiella-language-switcher layout-<?php echo esc_attr($settings['layout']); ?>">

            <button
                class="almiella-language-trigger"
                type="button"
            >

                <?php if ($settings['show_name'] === 'yes') : ?>

                    <span class="language-code">
                        <?php echo esc_html(strtoupper($current['code'])); ?>
                    </span>

                <?php endif; ?>


                <?php if ($settings['show_arrow'] === 'yes') : ?>

                    <span class="language-arrow">
                        ▼
                    </span>

                <?php endif; ?>

            </button>


            <div class="almiella-language-menu">
