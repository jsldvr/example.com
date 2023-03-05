<?php

/**
 * Load Application
 * 
 * @package ExampleApp\Load
 * @since   sandbox
 * @version sandbox
 */

class LoadApp
{
    public function loadConfigs()
    {
        $config_dir = APP_PATH . '/config/';
        $config_files = scandir($config_dir);

        foreach ($config_files as $config_file) {
            if (!in_array($config_file, array('.', '..'))) {
                require_once($config_dir . $config_file);
            }
        }
    }

    public function loadHome()
    {
        require_once APP_PATH . '/views/home.php';
    }
}
