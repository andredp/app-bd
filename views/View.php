<?php
/**
 * Created by PhpStorm.
 * User: andredp
 * Date: 10/12/14
 * Time: 22:19
 */

abstract class View {

    protected $model;
    protected $controller;

    protected function __construct($model, $controller) {
        $this->model = $model;
        $this->controller = $controller;
    }

    protected abstract function render();
} 