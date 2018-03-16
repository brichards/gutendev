<?php
/**
 * Plugin Name: GutenDev
 * Plugin URI:  https://github.com/brichards/gutendev
 * Description: Sample instructional code for creating custom Gutenberg blocks.
 * Author:      Brian Richards, Josh Pollock, Zac Gordon
 * Author URI:  https://github.com/brichards/gutendev
 * Text Domain: gutendev
 * Domain Path: /languages
 * Version:     0.1.0
 *
 * @package     Gutendev
 */

# Example 01 - Static Block
// require_once plugin_dir_path( __FILE__ ) . '/00-snippets/library-access/index.php';
require_once plugin_dir_path( __FILE__ ) . '/01-static/index.php';
// require_once plugin_dir_path( __FILE__ ) . '/01-static-complete/index.php';

# Example 02 - Editable Block
// require_once plugin_dir_path( __FILE__ ) . '/02-editable/index.php';
// require_once plugin_dir_path( __FILE__ ) . '/02-editable-complete/index.php';

# Example 03 - Configurable Block
// require_once plugin_dir_path( __FILE__ ) . '/03-configurable/index.php';
// require_once plugin_dir_path( __FILE__ ) . '/03-configurable-complete/index.php';
