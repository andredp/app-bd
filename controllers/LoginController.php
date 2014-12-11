<?php

namespace controllers;

use utils\Session;

class LoginController extends Controller {

    public function __construct($model, $view) {
        parent::__construct($model, $view);
    }

    public function actionDefault() {
        $this->view->render();
    }

    public function actionAjaxSubmit() {

        $nif=$_POST["username"];
        $pin=$_POST["pin"];

        $this->model->execute("SELECT * FROM pessoa WHERE nif=$nif");

        if ($this->model->getRecordCount() == 0) {
            header('Content-Type: application/json');
            echo json_encode(['status' => '0', 'message' => 'unknown user']);
            return;

        } else {
            if ($this->model->getRecord() != null) {
                foreach ($this->model->getRecord() as $row) {
                    $userpin = $row['pin'];
                    if ($userpin != $pin) {
                        header('Content-Type: application/json');
                        echo json_encode([
                            'status' => 1,
                            'message' => "wrong password"
                        ]);
                        return;
                    }
                }
                Session::set('username', $nif);
                header('Content-Type: application/json');
                echo json_encode([
                    'status' => 3,
                    'message' => explode('?', "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'])[0],
                    'message2' => "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']
                ]);
            }
        }
    }
} 