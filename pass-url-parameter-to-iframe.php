<?php
/**
 * Plugin Name:       Pass URL parameter to iframe src
 * Plugin URI:        https://github.com/abkarim/pass-url-parameter-to-iframe
 * Description:       Pass URL parameter to all iframe src
 * Version:           1.0.1
 * Author:            Karim
 * Author URI:        https://github.com/abkarim
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://xynity.xyz/app/pass-url-parameter-to-iframe
 * Text Domain:       pass-url-parameter-to-iframe
 */

//? Prevent direct access
if( ! defined( 'ABSPATH' ) ) exit; 

 /**
 * Define plugin path
 */
define( 'PASS_URL_PARAMETER_TO_IFRAME_URL', plugin_dir_url( __FILE__ ) );   

/**
 * Define plugin version
 */
define( 'PASS_URL_PARAMETER_TO_IFRAME_VERSION', '1.0.1' );

if( !function_exists('pass_url_parameter_to_iframe_enqueue_javascript')) {
  /**
  * Init function callback
  */
 function pass_url_parameter_to_iframe_enqueue_javascript() {
    # enqueue javascript
    wp_enqueue_script("pass-url-parameter-to-iframe-js", PASS_URL_PARAMETER_TO_IFRAME_URL . "js/pass-parameter.js", [], PASS_URL_PARAMETER_TO_IFRAME_VERSION, true);
 }
 # Hook into init
 add_action("init", 'pass_url_parameter_to_iframe_enqueue_javascript');
}
