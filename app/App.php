<?php

namespace app;

class App {

    private $db;
    private $model;
    private $view;
    private $controller;

    private $routes = ["default" => "Login"];

    public function __construct($db) {
        $this->db = $db;
    }

    private function routeSolver() {
        $route  = isset($_GET["r"]) ? $_GET["r"] : null;

        if ($route == null || !\utils\Session::isLoggedIn()) {
            $route = $this->routes['default'];
        }

        $class['m'] = "\\models\\" . $route. "Model";
        $class['v'] = "\\views\\" . $route. "View";
        $class['c'] = "\\controllers\\" . $route. "Controller";


        foreach ($class as $c) {
            if (!class_exists($c)) {
                echo "ERROR INVALID ROUTE";
                exit(0);                                                    // NEEDS TO BE LOGGED(LOG)!!!!!
            }
        }

        $this->model = new $class['m']($this->db);
        $this->view = new $class['v']($this->model);
        $this->controller = new $class['c']($this->model, $this->view);
    }

    public function run() {

        self::routeSolver();

        $action = isset($_GET["a"]) ? $_GET["a"] : null;

        if($action != null) {

            if(method_exists($this->controller, $action)) {
                $this->controller->{$action}();                             // SEND PARAMS TOOOOOOOOOO
            }
        }
        else {
            $this->controller->actionDefault();
        }
    }

}
