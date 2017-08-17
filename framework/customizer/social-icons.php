<?php
// Social Icons
function sixteen_customize_register_social( $wp_customize ) {
$wp_customize->add_section('sixteen_social_section', array(
    'title' => __('Social Icons','sixteen'),
    'priority' => 44 ,
));

$social_networks = array( //Redefinied in Sanitization Function.
    'none' => __('-','sixteen'),
    'facebook' => __('Facebook','sixteen'),
    'twitter' => __('Twitter','sixteen'),
    'google-plus' => __('Google Plus','sixteen'),
    'instagram' => __('Instagram','sixteen'),
    'rss' => __('RSS Feeds','sixteen'),
    'flickr' => __('Flickr','sixteen'),
);

$social_count = count($social_networks);

for ($x = 1 ; $x <= ($social_count - 3) ; $x++) :

    $wp_customize->add_setting(
        'sixteen_social_'.$x, array(
        'sanitize_callback' => 'sixteen_sanitize_social',
        'default' => 'none'
    ));

    $wp_customize->add_control( 'sixteen_social_'.$x, array(
        'settings' => 'sixteen_social_'.$x,
        'label' => __('Icon ','sixteen').$x,
        'section' => 'sixteen_social_section',
        'type' => 'select',
        'choices' => $social_networks,
    ));

    $wp_customize->add_setting(
        'sixteen_social_url'.$x, array(
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control( 'sixteen_social_url'.$x, array(
        'settings' => 'sixteen_social_url'.$x,
        'description' => __('Icon ','sixteen').$x.__(' Url','sixteen'),
        'section' => 'sixteen_social_section',
        'type' => 'url',
        'choices' => $social_networks,
    ));

endfor;

function sixteen_sanitize_social( $input ) {
    $social_networks = array(
        'none' ,
        'facebook',
        'twitter',
        'google-plus',
        'instagram',
        'rss',
        'flickr',
    );
    if ( in_array($input, $social_networks) )
        return $input;
    else
        return '';
}
}
add_action( 'customize_register', 'sixteen_customize_register_social' );