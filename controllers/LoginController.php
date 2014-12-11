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

    public function actionAjaxSubmit($nif = 64323725, $pin = 64725) {
        $this->model->setQuery("SELECT * FROM pessoa WHERE nif=$nif");
        $this->model->execute();

        if (!$this->model->getTableRecord()) {
            echo("Error1!");
        }

        if ($this->model->getTableRecord()->rowCount() == 0) {
            echo("Error2!");
            return json_encode([
                status  => "error",
                message => "Unknown Username"
            ]);
        }

        foreach ($this->model->getTableRecord() as $row) {
            $userpin = $row['pin'];
            $usernif = $row['nif'];
            if ($userpin != $pin) {
                echo("Error!");
                return json_encode([
                    status => "error",
                    message => "Wrong Password"
                ]);
            }
        }

        // On success
        echo("Success: ");
        echo("PIN: " . $userpin);
        echo("NIF: " . $usernif);
        //header("");
    }

} 