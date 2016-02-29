<?php
/**
 *---------------------------------------------------------------
 * Application Configuration
 *---------------------------------------------------------------
 *
 * Bofore requiering the autloader we need to define where
 * image butler finds the configuration files
 */
define('IMAGEBUTLER_CONFIG', __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'config');

/**
 *---------------------------------------------------------------
 * Autoloader / Compser
 *---------------------------------------------------------------
 *
 * We need to access our dependencies..
 */
require __DIR__ . 
	DIRECTORY_SEPARATOR . 
	'..' . 
	DIRECTORY_SEPARATOR . 
	'vendor' . 
	DIRECTORY_SEPARATOR . 
	'autoload.php';


/**
 *---------------------------------------------------------------
 * PUBLIC PATH
 *---------------------------------------------------------------
 *
 * Define the public path used by image butler
 */
define('IMAGEBUTLER_PUBLIC', __DIR__);