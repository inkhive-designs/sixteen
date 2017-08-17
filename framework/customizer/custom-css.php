<?php
function sixteen_customize_register_custom_css( $wp_customize ) {
$wp_customize-> add_section(
    'sixteen_custom_codes',
    array(
        'title'			=> __('Custom CSS','sixteen'),
        'description'	=> __('Enter your Custom CSS to Modify design.','sixteen'),
        'priority'		=> 41,
    )
);

$wp_customize->add_setting(
    'sixteen_custom_css',
    array(
        'default'		=> '',
        'capability'           => 'edit_theme_options',
        'sanitize_callback'    => 'wp_filter_nohtml_kses',
        'sanitize_js_callback' => 'wp_filter_nohtml_kses'
    )
);

$wp_customize->add_control(
    new sixteen_Custom_CSS_Control(
        $wp_customize,
        'sixteen_custom_css',
        array(
            'section' => 'sixteen_custom_codes',


        )
    )
);
}
add_action( 'customize_register', 'sixteen_customize_register_custom_css' );