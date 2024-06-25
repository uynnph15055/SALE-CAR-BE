<?php
/**
 * Add & modify customize function
 * @Author ThanhVV
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

class Customize {

	public function __construct() {
        add_action( 'customize_register', array($this,'customizer_general' ));
        add_action( 'customize_register', array($this,'customizer_color' ));
	}

    function customizer_general($wp_customize){
        $wp_customize->add_panel( 'general', array(
            'title' => 'General',
            'priority' => 1
        ) );
        if ( $wp_customize->get_section( 'static_front_page' ) ) {
            $wp_customize->get_section( 'static_front_page' )->panel = 'general';
            $wp_customize->get_section( 'static_front_page' )->priority = 20;
            $wp_customize->get_section( 'static_front_page' )->title = 'Homepage Display';
        }
        if ( $wp_customize->get_section( 'background_image' ) ) {
            $wp_customize->get_section( 'background_image' )->panel = 'general';
            $wp_customize->get_section( 'background_image' )->priority = 30;
        }
        $wp_customize->get_section( 'title_tagline' )->panel = 'general';
        $wp_customize->get_section( 'title_tagline' )->priority = 10;
        $wp_customize->get_section( 'title_tagline' )->title = 'Site Logo & Header';
        $wp_customize->get_control( 'header_image' )->section = 'title_tagline';
    }

    function customizer_color($wp_customize){
        $wp_customize->add_panel(
            'colors',
            array(
                'priority'       => 3,
                'title' => 'Panel colors',
                'description' => 'Panel colors'
            )
        );
        $wp_customize->add_section( 'colors-header', array(
            'title' => 'Header/Navigation',
            'panel' => 'colors',
            'priority' => 20
        ) );
        $wp_customize->add_setting( 'color-header-background', array(
            'default' => '#ffffff'
        ) );
        $wp_customize->get_control( 'header_textcolor' )->label = 'Header Text color';
        $wp_customize->get_control( 'header_textcolor' )->section = 'colors-header';

        $wp_customize->add_control( new WP_Customize_Color_Control(
            $wp_customize,
            'color-header-background',
            array(
                'label'   => 'Background header',
                'section' => 'colors-header',
                'priority' => 20
            )
        ) );
        $wp_customize->add_section(
            'color-footer_section',
            array(
                'title' => 'Footer Color',
                'panel' => 'colors',
            )
        );
        $wp_customize->add_setting( 'color-copyright-settings', array(
            'default' => '#ffffff',
        ) );
        $wp_customize->add_control(
            new WP_Customize_Color_Control(
                $wp_customize,
                'color-copyright-control',
                array(
                    'label'      => 'Color copyright',
                    'settings' => 'color-copyright-settings',
                    'section' => 'color-footer_section',
                    'priority' => 10,
                ) )
        );

    }
}
new Customize;