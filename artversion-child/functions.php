<?php
function artversion_scripts() {
	wp_enqueue_style( 'artversion-child-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'artversion-child-style' ));
    wp_enqueue_style( 'playfair-google-fonts', '<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;800&display=swap" rel="stylesheet">'); 
    wp_enqueue_style( 'poppins-google-fonts', '<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400&display=swap" rel="stylesheet">');
    wp_enqueue_style( 'roboto-google-fonts', '<link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">');
    wp_enqueue_style( 'droid-adobe-fonts', '<<link rel="stylesheet" href="https://use.typekit.net/ria4sqg.css rel="stylesheet">');    
}
add_action( 'wp_enqueue_scripts', 'artversion_scripts' );

