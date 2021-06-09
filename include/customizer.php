<?php
function nano_customizer($wp_customize){
    /* Copyright */
    $wp_customize->add_section( 'nano_footer' , array(
        'title'      => __( 'Alt Kısım Ayarları',"nanomedya"),
    ) );

    $wp_customize->add_setting( 'copyright_text' , array(
        'default'   => 'Copyright © Nanomedya 2021',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'copyright_text', array(
        'label'      => __( 'Copyright Yazısı',"nanomedya"),
        'section'    => 'nano_footer',
        'settings'   => 'copyright_text',
    ) ) );

    /* İletişim Bilgileri */
    $wp_customize->add_section( 'nano_contact' , array(
        'title'      => __( 'İletişim Ayarları',"nanomedya"),
    ) );

    $wp_customize->add_setting( 'contact_address' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_address', array(
        'type' => 'textarea',
        'label'      => __( 'Adres',"nanomedya"),
        'section'    => 'nano_contact',
        'settings'   => 'contact_address',
    ) ) );

    $wp_customize->add_setting( 'contact_phone' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_phone', array(
        'label'      => __( 'Telefon',"nanomedya"),
        'section'    => 'nano_contact',
        'settings'   => 'contact_phone',
    ) ) );

    $wp_customize->add_setting( 'contact_fax' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_fax', array(
        'label'      => __( 'Faks',"nanomedya"),
        'section'    => 'nano_contact',
        'settings'   => 'contact_fax',
    ) ) );

    $wp_customize->add_setting( 'contact_email' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_email', array(
        'label'      => __( 'E-Posta',"nanomedya"),
        'section'    => 'nano_contact',
        'settings'   => 'contact_email',
    ) ) );

    $wp_customize->add_setting( 'contact_map' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_map', array(
        'label'      => __( 'Harita Koordinatları',"nanomedya"),
        'section'    => 'nano_contact',
        'settings'   => 'contact_map',
    ) ) );

    /* Sosyal Medya */
    $wp_customize->add_section( 'nano_social' , array(
        'title'      => __( 'Sosyal Medya Ayarları',"nanomedya"),
    ) );

    $wp_customize->add_setting( 'social_facebook' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_facebook', array(
        'label'      => __( 'Facebook',"nanomedya"),
        'section'    => 'nano_social',
        'settings'   => 'social_facebook',
    ) ) );

    $wp_customize->add_setting( 'social_instagram' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_instagram', array(
        'label'      => __( 'Instagram',"nanomedya"),
        'section'    => 'nano_social',
        'settings'   => 'social_instagram',
    ) ) );

    $wp_customize->add_setting( 'social_twitter' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'social_twitter', array(
        'label'      => __( 'Twitter',"nanomedya"),
        'section'    => 'nano_social',
        'settings'   => 'social_twitter',
    ) ) );

}

add_action( 'customize_register', 'nano_customizer' );