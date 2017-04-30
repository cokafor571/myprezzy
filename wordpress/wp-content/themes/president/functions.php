<?php
/*
Functions file for storefront child theme
*/  

function president_scripts() {
    if ( is_front_page() ) {
        wp_enqueue_style('president-style', get_stylesheet_directory_uri() . '/presidentstyle.css'); 
        wp_enqueue_script('president-scripts', get_stylesheet_directory_uri() . '/js/president-scripts.js', array('jquery'), '20170316'); 
    }
}

// When page is loaded wpenqscripts hook is run which then calls back president_scripts that enqueues stylesheet found in child theme directory if on front page 

add_action('wp_enqueue_scripts', 'president_scripts');

// style cart page que and dque


function president_cart() {
    if ( is_cart() ) {
        wp_enqueue_script('president-cart', get_stylesheet_directory_uri() . '/js/president-cart.js', array('jquery'), '20170316'); 
    }
}


add_action('wp_enqueue_scripts', 'president_cart');

// dque

function president_not_cart() {
    if ( !is_cart() ) {
        wp_enqueue_script('president-notcart', get_stylesheet_directory_uri() . '/js/president-notcart.js', array('jquery'), '20170316'); 
    }
}


add_action('wp_enqueue_scripts', 'president_not_cart');

// style checkout page que and dque


function president_checkout() {
    if ( is_checkout() ) {
        wp_enqueue_script('president-checkout', get_stylesheet_directory_uri() . '/js/president-checkout.js', array('jquery'), '20170316'); 
    }
}


add_action('wp_enqueue_scripts', 'president_checkout');

// dque

function president_not_checkout() {
    if ( !is_checkout() ) {
        wp_enqueue_script('president-notcheckout', get_stylesheet_directory_uri() . '/js/president-notcheckout.js', array('jquery'), '20170316'); 
    }
}

add_action('wp_enqueue_scripts', 'president_not_checkout');

// excllude footer powered by wordpress 

add_action( 'init', 'custom_remove_footer_credit', 10 ); 

function custom_remove_footer_credit () {
    remove_action( 'storefront_footer', 'storefront_credit', 20); 
}

add_action( 'init', 'custom_remove_sidebar', 20 ); 

function custom_remove_sidebar () {
    remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10); 
}