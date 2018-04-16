<?php
/**
 * Created by PhpStorm.
 * User: Дмитрий
 * Date: 17.04.2018
 * Time: 9:45
 */
/*print '"__DIR__" = ' . __DIR__;
print "\n";
print dirname(__DIR__);
print "\n";
print __DIR__ . '\db.php';*/
//$db = require (__DIR__ . '/../config/db.php');
$db = require __DIR__ . '/db.php';
print_r($db);