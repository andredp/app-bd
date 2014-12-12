<?php

namespace controllers;

use utils\Session;

class BidDetailController extends Controller {

    public function __construct($model, $view) {
        parent::__construct($model, $view);
    }

    public function actionDefault() {
        $lid = $_GET["p"];

        $this->model->storeExecute("bdetail",
            "SELECT *, datediff(current_date(), date_add(dia, INTERVAL nrdias DAY)) as rem " .
            "FROM leilaor NATURAL JOIN leilao " .
            "WHERE lid = $lid;"
        );

        $this->model->storeExecute("bids",
            "SELECT pessoa, nome, valor " .
            "FROM lance AS L INNER JOIN pessoa AS P ON L.pessoa = P.nif " .
            "WHERE leilao = $lid " .
            "ORDER BY L.valor DESC;"
        );

        \utils\Session::set("lid", $lid);

        $this->view->render();
    }

    public function actionAjaxBid() {

        $lid   = Session::get("lid");
        $nif   = Session::get('username');
        $valor = $_POST["valor"];

        $this->model->execute("INSERT INTO lance(pessoa, leilao, valor) VALUES ($nif, $lid, $valor);");

    }




} 