<?php

/**
 * Example Web App
 * 
 * This is an example doc block documenting the purpose of this file 
 * and a high view description of this project. In this example web app, a LAMP 
 * (Linux, Apache, MariaDB, PHP 8.2 FPM) stack will be utilized to create a 
 * mostly static web application.
 * 
 * @version dev
 * @since   dev
 * @package Example
 * @license Apache License 2.0
 */

/**
 * Load app and dependencies
 */
define('APP_PATH', dirname(__DIR__) . '/app');

require APP_PATH . "/autoload.php";
require APP_PATH . "/load_app.php";

$loadApp = new LoadApp();
$loadApp->loadConfigs();
$loadApp->loadHome();
