<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10/12/14
 * Time: 11:12
 */

namespace controllers;

class AuctionController extends Controller {

    public function __construct($model, $view) {
        parent::__construct($model, $view);
        //echo "class: " . __CLASS__;
    }

    public function actionDefault() {
        // no model logic
        $this->model->execute("SELECT * FROM leilao");
        $this->view->render();
    }

    public function actionAjaxSubscribe($nif = 63063, $pin = 63063) {

        $this->model->execute("SELECT * FROM pessoa WHERE nif=$nif");

        if ($this->model->getRecordCount() == 0) {
            header('Content-Type: application/json');
            echo json_encode(['status' => '0', 'message' => 'unknown user']);
            return;
        }
        else {
            if($this->model->getRecord() != null) {
            }

                $this->model->execute("INSERT INTO concorrente(pessoa, leilao) VALUES (63063, 2)");
                header('Content-Type: application/json');
                echo json_encode([
                    'status' => 3,
                    'message' => explode('?', "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'])[0],
                    'message2' => "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']
                ]);

            }
        }




} 