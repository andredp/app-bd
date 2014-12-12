<?php

namespace controllers;

use utils\Session;

class AuctionController extends Controller {

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

    public function actionAjaxSubscribe() {
        $nif = Session::get('username');
        $lid = $_POST["lid"];

        $this->model->execute("INSERT INTO concorrente(pessoa, leilao) VALUES ($nif, $lid)");
    }




} 