<?php

function mariana_meneses_widgets_init() {

  	/*
    Sidebar (one widget area)
     */
    register_sidebar( array(
        'name' => __( 'Sidebar', 'mariana-meneses' ),
        'id' => 'sidebar-widget-area',
        'description' => __( 'Sidebar widget area', 'mariana-meneses' ),
        'before_widget' => '<section class="%1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );/*
    
    Noticias (one widget area)
     */
    register_sidebar( array(
        'name' => __( 'Noticias', 'mariana-meneses' ),
        'id' => 'noticias-widget-area',
        'description' => __( 'noticias widget area', 'mariana-meneses' ),
        'before_widget' => '<section class="%1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );
    
    /*
    Footer (three widget areas)
     */
    register_sidebar( array(
        'name' => __( 'Top-woocommmerce', 'mariana-meneses' ),
        'id' => 'Top-woo-widget-area',
        'description' => __( 'Barra superior woocommerce', 'mariana-meneses' ),
        'before_widget' => '<div class="%1$s %2$s col-sm-4">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );

  	/*
    woocommerce (one widget areas)
     */
    register_sidebar( array(
        'name' => __( 'Woocommerce', 'mariana-meneses' ),
        'id' => 'woocommerce-widget-area',
        'description' => __( 'Woocommerce widget area', 'mariana-meneses' ),
        'before_widget' => '<section class="%1$s %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h4>',
        'after_title' => '</h4>',
    ) );

}
add_action( 'widgets_init', 'mariana_meneses_widgets_init' );
