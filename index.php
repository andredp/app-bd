<?php

require_once('head.php');
require_once('navigation.php');

// views
require_once(__DIR__ . '/views/AuctionListView.php');
require_once(__DIR__ . '/views/LoginView.php');

// models
require_once(__DIR__ . '/models/AuctionListModel.php');
require_once(__DIR__ . '/models/LoginModel.php');

// controllers
require_once(__DIR__ . '/controllers/AuctionListController.php');
require_once(__DIR__ . '/controllers/LoginController.php');

require_once(__DIR__ . '/class/DataBase.php');
require_once(__DIR__ . '/includes/config.inc.php');

// routes
$routes = [
    'auction-list' => [
        'model'      => 'AuctionListModel',
        'view'       => 'AuctionListView',
        'controller' => 'AuctionListController'],
    'login' => [
        'model'      => 'LoginModel',
        'view'       => 'LoginView',
        'controller' => 'LoginController'
    ]
];

$db = new DataBase(HOST, DATABASE, USER, PASSWORD);

// MVC solver
$route  = isset($_GET["r"]) ? $_GET["r"] : null;
$action = isset($_GET["a"]) ? $_GET["a"] : null;

$model      = new $routes[$route]['model']($db);
$controller = new $routes[$route]['controller']($model);
$view       = new $routes[$route]['view']($model, $controller);

$view->prepare();

if (isset($action)) {
    echo "executing action: action" . $action;
    //var_dump($q);
    //var_dump( $_GET['a'] );
    $controller->{$action}();
}

$view->render();

require_once('footer.php');

