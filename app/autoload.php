<?php
/**
 * Autoload file
 * 
 * @package Example\Autoload
 * @version 1.0.0
 * @since 1.0.0
 * @author Jorge Saldivar
 * @license Apache License 2.0
 */


/**
 * Include the Composer autoloader file.
 */
require_once __DIR__ . '/../vendor/autoload.php';

/**
 * Register a PSR-4 autoloader for the app namespace.
 *
 * This assumes that the app namespace maps to the app/ directory.
 * For example, the App\Models\User class would be located at app/Models/User.php.
 *
 * @var \Composer\Autoload\ClassLoader $autoloader The Composer autoloader object.
 */
$autoloader = new \Composer\Autoload\ClassLoader();
$autoloader->addPsr4('App\\', __DIR__);
$autoloader->register();

/**
 * Load environment variables from a .env file.
 *
 * This uses the Dotenv library to load environment variables from a .env 
 * file located in the parent directory.
 * 
 * The file should contain key-value pairs in the format VAR_NAME=VAR_VALUE.
 *
 * @var Dotenv $dotenv The Dotenv object.
 */
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable("../");
$dotenv->load();
