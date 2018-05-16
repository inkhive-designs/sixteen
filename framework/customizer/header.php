<?php
//Logo Settings
function sixteen_customize_register_header( $wp_customize ) {
    $wp_customize->add_panel('sixteen_header_panel', array(
        'priority' => 5,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __('Header Settings', 'sixteen')
    ));


    $wp_customize->add_section( 'title_tagline' , array(
        'title'      => __( 'Title, Tagline & Logo', 'sixteen' ),
        'priority'   => 1,
        'panel'      => 'sixteen_header_panel'
    ) );
    //Replace Header Text Color with, separate colors for Title and Description
    //Settings For Logo Area

    function sixteen_title_visible( $control ) {
        $option = $control->manager->get_setting('sixteen_hide_title_tagline');
        return $option->value() == false ;
    }

}
add_action( 'customize_register', 'sixteen_customize_register_header' );