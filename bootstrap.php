<?php
session_start();

require_once __DIR__.'/config.php';
require_once __DIR__.'/src/error_handler.php';
require_once __DIR__.'/src/resolve-route.php';
require_once __DIR__.'/src/render.php';
require_once __DIR__.'/src/connection.php';
require_once __DIR__.'/src/flash.php';

if (resolve('/admin?(.*)')){
    require_once __DIR__. '/admin/routes.php';
}elseif (resolve('/(.*)')){
    require_once __DIR__. '/site/routes.php';
}