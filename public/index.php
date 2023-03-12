<?php

/**
 * Example Web App
 * 
 * This is an example doc block documenting the purpose of this file 
 * and a high view description of this project. In this example web app, a LAMP 
 * (Linux, Apache, MariaDB, PHP 8.2 FPM) stack will be utilized to create a 
 * mostly php web application.
 * 
 * @package Example
 * @version 1.0.0
 * @since 1.0.0
 * @license Apache License 2.0
 */

/**
 * APP_PATH
 * 
 * Defines the constant APP_PATH as the full path to the app directory, 
 * relative to the parent directory of the current directory.
 * 
 * @var string The full path to the app directory.
 */
define('APP_PATH', dirname(__DIR__) . '/app');

/**
 * Requires the autoload.php and load_app.php files located in the app 
 * directory, and loads the LoadApp class to perform initialization tasks.
 */

 // Require necessary files
require APP_PATH . "/autoload.php";
require APP_PATH . "/load_app.php";

// Create instance of LoadApp class and call its methods
$loadApp = new LoadApp();
$loadApp->loadConfigs();
$loadApp->loadHome();
