<?php

abstract class View {

    protected $model;
    protected $controller;

    protected function __construct($model, $controller) {
        $this->model = $model;
        $this->controller = $controller;
    }

    protected abstract function prepare();

    protected abstract function render();
} 