<?php 

/*
// Override any of the default settings below:

$config['site_title'] = 'Vee Satayamas';			// Site title
$config['base_url'] = 'http://www.8fold.in'; 				// Override base URL (e.g. http://example.com)
$config['theme'] = 'default'; 			// Set the theme (defaults to "default")
$config['date_format'] = 'jS M Y';		// Set the PHP date format
$config['twig_config'] = array(			// Twig settings
	'cache' => false,					// To enable Twig caching change this to CACHE_DIR
	'autoescape' => false,				// Autoescape Twig vars
	'debug' => true					// Enable Twig debug
);
$config['pages_order_by'] = 'alpha';	// Order pages by "alpha" or "date"
$config['pages_order'] = 'asc';			// Order pages "asc" or "desc"
$config['excerpt_length'] = 50;			// The pages excerpt length (in words)

// To add a custom config setting:

$config['custom_setting'] = 'Hello'; 	// Can be accessed by {{ config.custom_setting }} in a theme

*/

$config['site_title'] = "Vee Satayamas";
$config['pages_order_by'] = 'date';	// Order pages by "alpha" or "date"
$config['pages_order'] = 'desc';// Order pages "asc" or "desc"
$config['theme'] = 'pure'; 			// Set the theme (defaults to "default")
$config['base_url'] = 'http://www.8fold.in'; 		

$config['pagination_limit'] = 3;