<?php
/**
 * Created by PhpStorm.
 * User: Trevor
 * Date: 04/02/2015
 * Time: 10:30 PM
 */


function pr($arr) {
    $cli = (php_sapi_name() == 'cli');
    if (!$cli) echo "<pre style='font-size: 8pt; text-align: left; background-color: #ffffff;'>";
    print_r($arr);
    if (!$cli) echo "</pre>";
}