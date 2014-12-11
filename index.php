<?php

require_once('head.php');
require_once('navigation.php');

// views
require_once(__DIR__ . '/views/AuctionList.php');

// models
require_once(__DIR__ . '/models/AuctionModel.php');

// controllers
require_once(__DIR__ . '/controllers/AuctionListController.php');

require_once(__DIR__ . '/class/DataBase.php');
require_once(__DIR__ . '/includes/config.inc.php');

// routes
$routes = [
    'auction-list' => [
        'model'      => 'AuctionModel',
        'view'       => 'AuctionList',
        'controller' => 'AuctionListController'],
    'login' => [
        'model'      => '',
        'view'       => '',
        'controller' => ''
    ]
];

$db = new DataBase(HOST, DATABASE, USER, PASSWORD);

// MVC solver
$route  = isset($_GET["r"]) ? $_GET["r"] : null;
$action = isset($_GET["a"]) ? $_GET["a"] : null;

$model      = new $routes[$route]['model']($db);
$controller = new $routes[$route]['controller']($model);
$view       = new $routes[$route]['view']($model, $controller);
$view->render();

if (isset($action)) {
    echo "executing action: action" . $action;
    //var_dump($q);
    //var_dump( $_GET['a'] );
    $controller->{$action}();
}

require_once('footer.php');

