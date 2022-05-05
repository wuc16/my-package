<?php 

require_once 'vendor/autoload.php';

use wuc16\MyPackage\Hello;

$test = new Hello();

echo $test->say('123');
