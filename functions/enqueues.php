<?php

/*
Google CDN jQuery with a local fallback
=======================================
See http://www.wpcoke.com/load-jquery-from-cdn-with-local-fallback-for-wordpress/
*/

if( !is_admin()){
	$url = 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'; 
	$test_url = @fopen($url,'r'); 
	if($test_url !== false) { 
		function load_external_jQuery() {
			wp_deregister_script('jquery'); 
			wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'); 
			wp_enqueue_script('jquery'); 
		}
		add_action('wp_enqueue_scripts', 'load_external_jQuery'); 
	} else {
		function load_local_jQuery() {
			wp_deregister_script('jquery'); 
			wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-1.11.3.min.js', __FILE__, false, '1.11.3', true); 
			wp_enqueue_script('jquery'); 
		}
		add_action('wp_enqueue_scripts', 'load_local_jQuery'); 
	}
}

function mariana_meneses_enqueues() {

/*
OPTIONAL: Enqueue WordPress's onboard jQuery
============================================
Un-comment the next two lines of code if you want to use WordPress's onboard jQuery INSTEAD of the Google CDN jQuery above.
	wp_register_script('jquery', get_bloginfo('template_url').'/js/jquery-1.11.3.min.js', __FILE__, false, '1.11.3', true);
	wp_enqueue_script( 'jquery' );
*/    
	wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', false, '3.3.4', null);
  	wp_register_style('theme', get_template_directory_uri() . '/css/style-dist.css', false, null);

	wp_enqueue_style('bootstrap-css');
	wp_enqueue_style('theme');
/*
OPTIONAL: Bootstrap Theme enqueued
==================================
Delete (or comment-out) the next two lines of code below if you don't want the Bootstrap Theme.
*/

  	wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.8.3.min.js', false, null, false);
    wp_register_script('boot', get_template_directory_uri() . '/js/bootstrap.js', false, null, false);
    wp_register_script('dwn', get_template_directory_uri() . '/js/intro.js', false, null, false);
    wp_register_script('main', get_template_directory_uri() . '/js/main-dist.js', false, null, false);
    
	wp_enqueue_script('modernizr');
	wp_enqueue_script('boot');
	wp_enqueue_script('dwn');
    wp_enqueue_script('main');    
    
    
    if(is_singular() || is_page() ) {
        
        wp_register_script('maso', get_template_directory_uri() . '/js/masonry.pkgd.min.js', false, null, false);
        wp_register_script('maso-in', get_template_directory_uri() . '/js/masonry-init-dist.js', false, null, false);
        
        wp_enqueue_script('maso');
        wp_enqueue_script('maso-in');
        
    }
    
    if(is_woocommerce()){
        wp_register_style('woomm', get_template_directory_uri() . '/css/woocommerce-dist.css', false, null);
        wp_enqueue_style('woomm');
    }
        
    if(is_front_page() ) {
        wp_register_script('vivus', get_template_directory_uri() . '/js/vivus.min.js', false, null, false);
        wp_register_script('anima', get_template_directory_uri() . '/js/anima.js', false, null, false);
        
        wp_enqueue_script('vivus');
        wp_enqueue_script('anima');
    }
    
    
}
add_action('wp_enqueue_scripts', 'mariana_meneses_enqueues', 100);
