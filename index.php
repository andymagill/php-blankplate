<?php

// app index

include_once('config.php');

$route = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($route) {
    case '/' :
    case '' :
        require __DIR__ . '/views/home.php';
        break;
    case '/more-info' :
        require __DIR__ . '/views/more-info.php';
        break;
    default:
        require __DIR__ . '/views/404.php';
        break;
}
?>
