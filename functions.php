<?php
/*
Funções principais e requerimentos, outras funções em: "parts/functions"
 */

require_once get_template_directory(). '/parts/functions/conection-parts.php'; 

add_theme_support( 'title-tag' );

add_theme_support( 'automatic-feed-links' );

add_theme_support( 'post-thumbnails' );

add_theme_support( 'html5', array( 'comment-form', 'comment-list', 'gallery', 'caption', ) );

add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'gallery', 'audio', ) );

add_theme_support( 'customize-selective-refresh-widgets' );

add_theme_support('custom-header', array(
	'default-image' => get_template_directory_uri(). '/custom/images/back-header-main.jpg',
	'width'         => 1366,
	'height'        => 800,
	'flex-width'    => true,
	'flex-height'   => true,
	'uploads'       => true, 
));

add_theme_support('custom-logo', array(
	'width'       => 240,
	'height'      => 50,
	'flex-width'  => true,
	'flex-height' => true,
	'header-text' => array('site-title'),
));

register_nav_menus(array(
	'primary'    => 'Menu Principal',
	'part_one'   => 'Menu inferior 1',
	'part_two'   => 'Menu inferior 2',
	'part_three' => 'Menu inferior 3',
	'category'   => 'Menu de categorias',
));

?>
