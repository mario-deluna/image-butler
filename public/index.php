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
	'..' . 
	DIRECTORY_SEPARATOR . 
	'vendor' . 
	DIRECTORY_SEPARATOR . 
	'autoload.php';

/**
 *---------------------------------------------------------------
 * Get the application
 *---------------------------------------------------------------
 *
 * Simply require the imagebutler.php file to create an 
 * application instance we can work with.
 */
$application = require __DIR__ . DS . '..' . DS . 'imagebutler.php';


/**
 *---------------------------------------------------------------
 * Dispatch
 *---------------------------------------------------------------
 *
 * Run the default public actions.
 * $_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']
 */
$application->dispatchFromSuperGlobals();