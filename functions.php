<?php
if ( ! defined( 'ABSPATH' ) ){ exit; }

/**
 * Remove themes updates
 */
add_filter( 'auto_update_theme', '__return_false' ); 

define ('THEME_INC', 1);

require_once __DIR__ . '/admin/include.php';

