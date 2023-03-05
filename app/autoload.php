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

 // Load the Composer autoloader
 require_once __DIR__ . '/../vendor/autoload.php';
 
 // Register a PSR-4 autoloader for the app namespace
 // This assumes that the app namespace maps to the app/ directory
 // For example, App\Models\User class would be located at app/Models/User.php
 $autoloader = new \Composer\Autoload\ClassLoader();
 $autoloader->addPsr4('App\\', __DIR__);
 $autoloader->register();
 