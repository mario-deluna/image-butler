<?php 
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
return new App($configuration);