<?php

const PREFIX_TO_RELATIVE_PATH = "Revision/src/";

require 'Autoloader.php';

use application\DefaultComponentFactory;
use yasmf\DataSource;
use yasmf\Router;

$dataSource = new DataSource(
    $host = 'localhost',
    $port = '3306',
    $db = 'revision',
    $user = 'root',
    $pass = 'root',
    $charset = 'utf8mb4'
);


$router = new Router(new DefaultComponentFactory(), $dataSource) ;
$router->route(PREFIX_TO_RELATIVE_PATH);
