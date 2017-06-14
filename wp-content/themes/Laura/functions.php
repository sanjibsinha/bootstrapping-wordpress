<?php 


function laura_scripts() {
    
    wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array('jquery'), true);
wp_register_script('min', get_template_directory_uri() . '/js/jquery.easing.min.js', array('jquery'), true);
wp_register_script('min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true);
wp_register_script('min', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'), true);
wp_register_script('min', get_template_directory_uri() . '/js/wow.js', array('jquery'), true);
wp_register_script('min', get_template_directory_uri() . '/js/custom.js', array('jquery'), true);
wp_register_script('min', get_template_directory_uri() . '/contactform/contactform.js', array('jquery'), true);

wp_register_script('min', get_template_directory_uri() . '/custom/lib/jquery/jquery.min.js', array('jquery'), true);
wp_register_script('bootstrap', get_template_directory_uri() . '/custom/lib/bootstrap/js/bootstrap.min.js', array('jquery'), true);
wp_register_script('new-age', get_template_directory_uri() . '/custom/js/new-age.min.js', array('jquery'), true);
wp_register_script('jquery', get_template_directory_uri() . '/gallery/js/jquery.js', array('jquery'), true);
wp_register_script('bootstrap-min', get_template_directory_uri() . '/gallery/js/bootstrap.min.js', array('jquery'), true);

wp_enqueue_script('laura_script');

//wp_enqueue_style('news', get_template_directory_uri(). '/blog/blog-style.css', 'style');  

if (is_page(4)) {
    
    wp_enqueue_style( get_template_directory_uri(). '/style.css', 'style' );    
     
}

elseif (is_page(array(2))) {
    
    wp_enqueue_style('customstyle', get_template_directory_uri(). '/custom/custom-style.css', 'style'); 
    
}


else {
    
    wp_enqueue_style('poststyle', get_template_directory_uri(). '/post/post-style.css', 'style'); 
    //wp_enqueue_style('writingsstyle', get_template_directory_uri(). '/writings/writings-style.css', 'style'); 
}


} 

add_action( 'wp_enqueue_scripts', 'laura_scripts' );  

function boot_scripts() {
    
   if (is_page(36)) {
    
    wp_enqueue_style('writingsstyle', get_template_directory_uri(). '/writings/writings-style.css', 'style'); 
     
}
    
}
add_action( 'wp_enqueue_scripts', 'boot_scripts' );  



if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

register_taxonomy( 'sample-taxonomy', 'post', array( 'label' => 'Sample Taxonomy'));


