<?php
/**
 * Created by PhpStorm.
 * User: andredp
 * Date: 11/12/14
 * Time: 01:50
 */

namespace controllers;

class LoginController extends Controller {

    public function __construct($model, $view) {
        parent::__construct($model, $view);
        //echo "class: " . __CLASS__;
    }

    public function actionDefault() {
        // no model logic
        $this->view->render();
    }

    public function actionAjaxSubmit($nif, $pin) {
        $this->model->setQuery("SELECT * FROM pessoa");
        $this->model->execute();
        //return json_encode();

        //header();


        echo "actionAjaxSubmit";
    }

} 