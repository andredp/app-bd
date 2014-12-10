<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10/12/14
 * Time: 11:14
 */

require_once(__DIR__ . '/../includes/config.inc.php');

class TableRecordModel {

    private $query;
    private $record;
    private $connection;

    public function __construct() {
        //echo __CLASS__;
    }

    public function setQuery($sql) {
        $this->query = $sql;
    }

    public function execute() {
        $this->connection = new PDO("mysql:host=" . HOST . ";dbname=" . DATABASE, USER, PASSWORD, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        $this->record = $this->connection->query($this->query);
    }

    public function updateRecord() {

    }

    public function getTableRecord() {
        return $this->record;
    }

}

