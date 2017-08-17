<?php
//Logo Settings
function sixteen_customize_register_header( $wp_customize ) {
$wp_customize->add_section( 'title_tagline' , array(
    'title'      => __( 'Title, Tagline & Logo', 'sixteen' ),
    'priority'   => 30,
) );

$wp_customize->add_setting( 'sixteen_logo' , array(
    'default'     => '',
    'sanitize_callback' => 'esc_url_raw',
) );
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'sixteen_logo',
        array(
            'label' => __('Upload Logo','sixteen'),
            'section' => 'title_tagline',
            'settings' => 'sixteen_logo',
            'priority' => 5,
        )
    )
);


//Replace Header Text Color with, separate colors for Title and Description
//Override sixteen_site_titlecolor
$wp_customize->remove_control('display_header_text');
$wp_customize->remove_setting('header_textcolor');
$wp_customize->add_setting('sixteen_site_titlecolor', array(
    'default'     => '#3a85ae',
    'sanitize_callback' => 'sanitize_hex_color',
));

$wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'sixteen_site_titlecolor', array(
        'label' => __('Site Title Color','sixteen'),
        'section' => 'colors',
        'settings' => 'sixteen_site_titlecolor',
        'type' => 'color'
    ) )
);

//Settings For Logo Area

function sixteen_title_visible( $control ) {
    $option = $control->manager->get_setting('sixteen_hide_title_tagline');
    return $option->value() == false ;
}

}
add_action( 'customize_register', 'sixteen_customize_register_header' );