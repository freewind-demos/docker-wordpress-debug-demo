<?php
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );
define( 'SCRIPT_DEBUG', true );
?>

<?php
require( dirname( __FILE__ ) . '/wp-load.php' );

error_log('my-error_log');
throw new Error('Hello-error')
?>