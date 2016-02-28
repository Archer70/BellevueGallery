<?php
use Bellevue\Router\src\Router;

require __DIR__ . '/../vendor/autoload.php';

define('public_url', sprintf('%s://%s%s',
    $_SERVER['REQUEST_SCHEME'],
    $_SERVER['HTTP_HOST'],
    str_replace('/index.php', '', $_SERVER['SCRIPT_NAME']))
);

$routes = json_decode(file_get_contents(__DIR__ . '/../routes.json'), true);
$router = new Router($routes);
$router->route(isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '');

function home()
{
    echo '<h2>Home</h2>';
    echo '<a href="index.php/photo/1">Photo 1</a> <a href="index.php/gallery/1">Gallery 1</a>';
}
