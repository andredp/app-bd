<?php

require_once(__DIR__ . "/TableRecordModel.php");

class AuctionListModel extends TableRecordModel {

    const SQL = 'SELECT * FROM leilao';

    public function __construct($db) {
        parent::__construct($db, self::SQL);
    }

} 