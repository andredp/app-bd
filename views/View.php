<?php

namespace views;

abstract class View {

    protected $model;

    protected function __construct($model) {
        $this->model = $model;
    }

    protected abstract function prepare();

    protected abstract function render();
} 