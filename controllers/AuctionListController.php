<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10/12/14
 * Time: 11:12
 */

class AuctionListController {

    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function show() {
        echo "SHOW SHOW SHOW SHOW SHOW";
        //$this->model->render();
    }

} 