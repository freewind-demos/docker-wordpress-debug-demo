<?php
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
define('SCRIPT_DEBUG', true);
?>

<?php
if (!function_exists('write_log')) {
    function write_log($log)
    {
        if (WP_DEBUG === true) {
            if (is_array($log) || is_object($log)) {
                error_log(print_r($log, true));
            } else {
                error_log($log);
            }
        }
    }
}
?>


<?php
require(dirname(__FILE__) . '/wp-load.php');

error_log('my error_log');
write_log('my write_log');

throw new Error('Hello-error')
?>