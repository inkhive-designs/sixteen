<?php
//sixteende
function sixteen_customize_register_misc( $wp_customize ) {
    //Upgrade
    $wp_customize->add_section(
        'sixteen_sec_upgrade',
        array(
            'title'     => __('Discover SIXTEEN PLUS','sixteen'),
            'priority'  => 45,
        )
    );

    $wp_customize->add_setting(
        'sixteen_upgrade',
        array( 'sanitize_callback' => 'esc_textarea' )
    );

    $wp_customize->add_control(
        new sixteen_WP_Customize_Upgrade_Control(
            $wp_customize,
            'sixteen_upgrade',
            array(
                'label' => __('More of Everything','sixteen'),
                'description' => __('Sixteen Plus has more of Everything. More New Features, More Options, Unlimited Colors, More Fonts, More Layouts, Configurable Slider, Inbuilt Advertising Options, More Widgets, and a lot more options and comes with Dedicated Support. To Know More about the Pro Version, click here: <a href="http://inkhive.com/product/sixteen-plus/">Upgrade to Pro Version</a>.','sixteen'),
                'section' => 'sixteen_sec_upgrade',
                'settings' => 'sixteen_upgrade',
            )
        )
    );
}
add_action( 'customize_register', 'sixteen_customize_register_misc' );