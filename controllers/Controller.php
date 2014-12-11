<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 11/12/14
 * Time: 12:33
 */

namespace controllers;


abstract class Controller {

    protected $model;
    protected $view;

    protected function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }

    public abstract function actionDefault();

} 