<?php 
/**
 *---------------------------------------------------------------
 * Directory seperator
 *---------------------------------------------------------------
 *
 * Define the directory seperator to allow image-butler
 * to run on diffrent operating systems.
 */
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

/**
 *---------------------------------------------------------------
 * Environment
 *---------------------------------------------------------------
 * 
 * Set the default environment and later the current environemnt
 * based on a server side env variable. Or fallback to default.
 */
if (!defined('IMAGEBUTLER_DEFAULT_ENV')) {
	define('IMAGEBUTLER_DEFAULT_ENV', 'development');
}

// and set the current environment
if (!defined('IMAGEBUTLER_ENV')) {
	$environment = IMAGEBUTLER_DEFAULT_ENV;
	
	if (isset($_SERVER['IMAGEBUTLER_ENV'])) {
		$environment = $_SERVER['IMAGEBUTLER_ENV'];
	}

	define('IMAGEBUTLER_ENV', $environment);
}

/**
 *---------------------------------------------------------------
 * Configuration
 *---------------------------------------------------------------
 * 
 * Try to load the environemnt specific configuration file from
 * the application this requires that the IMAGEBUTLER_CONFIG 
 * constant is defined.
 */
if (!defined('IMAGEBUTLER_CONFIG')) {
	throw new Exception('Cannot initialize image butler without the "IMAGEBUTLER_CONFIG" define.')
}

$configuration = array();
$configurationPath =  IMAGEBUTLER_CONFIG . DS . IMAGEBUTLER_ENV . '.php';

if (file_exists($configurationPath) && is_readable($configurationPath)) {
	$configuration = require $configurationPath;
}

/**
 *---------------------------------------------------------------
 * Start the Application
 *---------------------------------------------------------------
 * 
 * Try to load the environemnt specific configuration file
 */
ImageButler\App::create(new ImageButler\App($configuration));