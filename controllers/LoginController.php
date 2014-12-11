<?php
/**
 * Created by PhpStorm.
 * User: andredp
 * Date: 11/12/14
 * Time: 01:50
 */

namespace controllers;

use utils\Session;

class LoginController extends Controller {

    public function __construct($model, $view) {
        parent::__construct($model, $view);
        //echo "class: " . __CLASS__;
    }

    public function actionDefault() {
        // no model logic
        $this->view->render();
    }

    public function actionAjaxSubmit($nif = 63063, $pin = 63063) {

        $this->model->execute("SELECT * FROM pessoa WHERE nif=$nif");

        if ($this->model->getRecordCount() == 0) {
            header('Content-Type: application/json');
            echo json_encode(['status' => '0', 'message' => 'unknown user']);
            return;
        }
        else {
            if($this->model->getRecord() != null) {
                foreach ($this->model->getRecord() as $row) {
                    $userpin = $row['pin'];
                    $usernif = $row['nif'];
                    if ($userpin != $pin) {

                        header('Content-Type: application/json');
                        echo json_encode([
                            'status' => 1,
                            'message' => "wrong password"
                        ]);
                        return;
                    }
                }
                $url = 1;//$_SERVER('REQUEST_URI');
                //\http_redirect("http:8888/localhost/app-bd", array("name" => "value"), true, HTTP_REDIRECT_PERM);

                header('Content-Type: application/json');
                echo json_encode([
                    'status' => 3,
                    'message' => explode('?', "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'])[0],
                    'message2' => "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']
                ]);

            }
        }
/*
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
*/

    }

} 