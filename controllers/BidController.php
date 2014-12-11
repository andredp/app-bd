<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10/12/14
 * Time: 11:12
 */

namespace controllers;

use utils\Session;

class BidController extends Controller {

    public function __construct($model, $view) {
        parent::__construct($model, $view);
    }

    public function actionDefault() {
        $nif = Session::get('username');

        $this->model->execute(
            "SELECT * " .
            "FROM concorrente AS C INNER JOIN leilaor AS L ON L.lid = C.leilao NATURAL JOIN leilao " .
            "WHERE C.pessoa = $nif;"
        );

        $this->view->render();
    }

    public function actionAjaxSubscribe() {

        $nif = Session::get('username');
        $lid = $_POST["lid"];


        $this->model->execute("INSERT INTO concorrente(pessoa, leilao) VALUES ($nif, $lid)");
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