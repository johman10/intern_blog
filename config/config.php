<?php
/**
 * Pico Configuration
 *
 *  This is the configuration file for Pico. It comes loaded with the
 *  default values, which can be found in the get_config() method of
 *  the Pico class (lib/pico.php).
 *
 * @author Gilbert Pellegrom
 * @link http://picocms.org
 * @license http://opensource.org/licenses/MIT
 * @version 0.9
 *
 * To override any of the default settings below, copy this file to
 * `config.php`, uncomment the line and make and save your changes.
 */

/*
 * BASIC
 */
$config['site_title'] = 'Stage';              // Site title
// $config['base_url'] = '';                    // Override base URL (e.g. http://example.com)

/*
 * THEME
 */
$config['theme'] = 'fancy';                // Set the theme (defaults to "default")
// $config['twig_config'] = array(              // Twig settings
//	'cache' => false,	                        // To enable Twig caching change this to CACHE_DIR
//	'autoescape' => false,                      // Autoescape Twig vars
//	'debug' => false                            // Enable Twig debug
// );

/*
 * CONTENT
 */
$config['date_format'] = '%d-%m-%Y';             // Set the PHP date format as described here: http://php.net/manual/en/function.strftime.php
$config['pages_order_by'] = 'date';           // Order pages by "alpha" or "date"
$config['pages_order'] = 'desc';                // Order pages "asc" or "desc"
// $config['excerpt_length'] = 50;                // The pages excerpt length (in words)
$config['content_dir'] = 'content/';    // Content directory

/*
 * TIMEZONE
 */
// date_default_timezone_set('UTC');              // Timezone may be reqired by your php install

/*
 * Minify - https://github.com/NiklasTeich/pico-minify
 */
$config['pico_minify'] = array(
    'minify' => true,
    'compress_css' => true,
    'compress_js' => true,
    'remove_comments' => true
);

/*
 * Cache - https://github.com/glumb/pico_cache
 */
$config['cache_enabled'] = false; // default
$config['cache_dir'] = 'content/cache/'; // default
$config['cache_time'] = '604800'; // 60*60*24*7, seven days (default)

/*
 * CUSTOM
 */
// $config['custom_setting'] = 'Hello';           // Can be accessed by {{ config.custom_setting }} in a theme
$config['date_time_format'] = '%d-%m-%Y %R';
$config['site_author'] = 'Johan van Eck';
$config['site_description'] = 'Een blogje met informatie over mijn stage bij Mangrove';

// Keep this line
return $config;
