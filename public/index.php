<?php

define('PROJECT_PATH', dirname(dirname(__FILE__)));

if (!isset($_SERVER['FRAPI_CUSTOM_PATH'])) {
    $_SERVER['FRAPI_CUSTOM_PATH'] = PROJECT_PATH . '/api';
}

require PROJECT_PATH . '/lib/frapi/src/frapi/public/index.php';