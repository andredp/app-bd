<?php

namespace controllers;

use utils\Session;

class AuctionTransactionController extends Controller {

    public function __construct($model, $view) {
        parent::__construct($model, $view);
    }

    public function actionDefault() {
        $this->model->execute(
            "SELECT * FROM leilao " .
            "NATURAL JOIN leilaor " .
            "ORDER BY lid");
        $this->view->render();
    }

    public function actionAjaxAuctionTransaction() {

        $lids = $_POST["lids"];
        $nif = Session::get('username');

        $this->model->beginTransaction();

        foreach($lids as $lid) {
            $this->model->exec("INSERT INTO concorrente(pessoa, leilao) VALUES ($nif, $lid)");
        }

        $this->model->commit();

       // $this->model->execute("INSERT INTO concorrente(pessoa, leilao) VALUES ($nif, $lid)");
                /*
                header('Content-Type: application/json');
                echo json_encode([
                    'status' => 3,
                    'message' => explode('?', "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'])[0],
                    'message2' => "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']
                ]);
                */

        }




} 