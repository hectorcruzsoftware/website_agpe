<?php
// Exit if accessed directly.
defined('ABSPATH') || exit;
/**redirect al home */
header("Location: " . get_home_url());
exit();
