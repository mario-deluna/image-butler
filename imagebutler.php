<?php 
/**
 *---------------------------------------------------------------
 * Autoloader / Compser
 *---------------------------------------------------------------
 *
 * We need to access our dependencies..
 */
require __DIR__ . 
	DIRECTORY_SEPARATOR . 
	'vendor' . 
	DIRECTORY_SEPARATOR . 
	'autoload.php';

/**
 *---------------------------------------------------------------
 * Configuration
 *---------------------------------------------------------------
 * 
 * Try to load the environemnt specific configuration file from
 * 
 */
$configuration = array();
$configurationPath =  __DIR__ . DS . 'config' . DS .  IMAGEBUTLER_ENV . '.php';

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
return new Service\App($configuration);