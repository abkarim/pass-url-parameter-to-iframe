<?php
/**
 * Plugin Name:       Pass URL parameter to iframe
 * Plugin URI:            https://xynity.xyz/app/pass-url-parameter-to-iframe
 * Description:         Pass URL parameter to iframe src url
 * Version:                 0.1.0
 * Author:                  Xynity
 * Author URI:        https://xynity.xyz
 * License:              GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://xynity.xyz/app/pass-url-parameter-to-iframe
 * Text Domain:      pass-url-parameter-to-iframe
 * Domain Path:       /languages
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
define( 'PASS_URL_PARAMETER_TO_IFRAME_VERSION', '0.1.0' );

 /**
 * Init function callback
 */
function enqueue_javascript() {
   # enqueue javascript
   wp_enqueue_script("pass-url-parameter-to-iframe-js", PASS_URL_PARAMETER_TO_IFRAME_URL . "js/pass-parameter.js", [], PASS_URL_PARAMETER_TO_IFRAME_VERSION, true);
}
# Hook into init
add_action("init", 'enqueue_javascript');


