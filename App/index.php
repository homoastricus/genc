<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
require_once '../vendor/autoload.php';
echo "test";

$gencoder = new GenC\GenCoder();
$gencoder_config = $gencoder->init();
var_dump($gencoder_config);
exit;