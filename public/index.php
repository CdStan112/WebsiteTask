<?php


require_once __DIR__ . '/../vendor/autoload.php';
require dirname(__DIR__) . '/config/config.php';
require CORE . '/funcs.php';
require_once __DIR__ . '/makedb.php';

$router = new \core\Router();
require CONFIG . '/routes.php';
$router->match();

