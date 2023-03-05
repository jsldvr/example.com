<?php
/**
 * Helpers
 * 
 * Helpful PHP stand alone functions.
 * 
 * @package Example\Helpers
 * @version 1.0.0
 * @since 1.0.0
 */

/**
 * Function to sanitize input data
 * 
 * Sanitizes input data by removing any HTML tags and escaping special 
 * characters.
 * 
 * @param mixed $data The data to be sanitized.
 * @return string The sanitized data.
 */
function sanitize($data)
{
    return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8');
}

/**
 * Function to redirect to a URL
 * 
 * Redirects the user to a given URL using the HTTP header "Location".
 * 
 * @param string $url The URL to redirect to.
 * @return void
 */
function redirect($url)
{
    header("Location: $url");
    exit();
}

/**
 * Generates a random string.
 * 
 * @param int $length The length of the string to generate. Default is 10.
 * @return string The randomly generated string.
 */
function random_string($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $characters_length = strlen($characters);
    $random_string = '';
    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, $characters_length - 1)];
    }
    return $random_string;
}
