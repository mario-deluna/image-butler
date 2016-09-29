<?php
/**
 *---------------------------------------------------------------
 * Get the application
 *---------------------------------------------------------------
 *
 * Simply require the imagebutler.php file to create an 
 * application instance we can work with.
 */
$application = require __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'imagebutler.php';

/**
 *---------------------------------------------------------------
 * Dispatch
 *---------------------------------------------------------------
 *
 * Run the default public actions.
 * $_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']
 */
$response = $application->dispatchFromSuperGlobals();

/**
 *---------------------------------------------------------------
 * Send the response
 *---------------------------------------------------------------
 *
 * Now we can send our response to the client, means
 * setting the headers and outputting the body.
 */
$response->send(true);