<?php
function sixteen_custom_head_codes() {

    // Echo the Custom CSS Entered via Theme Options
    echo esc_html( get_theme_mod('sixteen_custom_css') );

    //Modify CSS a little if Slider is disabled.
    if ( !get_theme_mod('sixteen_main_slider_enable' ) && !is_home() ) :
        echo "<style>.main-navigation {	margin-bottom: -5px;}</style>";
    endif;

    if ( !get_theme_mod('sixteen_main_slider_enable' ) && is_front_page() ) :
        echo "<style>.main-navigation {	margin-bottom: 15px;}</style>";
    endif;
}
add_action('wp_head', 'sixteen_custom_head_codes');