<?php

require_once(__DIR__ . "/TableRecordModel.php");

class LoginModel extends TableRecordModel {

    const SQL = 'SELECT * FROM pessoa';

    public function __construct($db) {
        parent::__construct($db, self::SQL);
    }

} 