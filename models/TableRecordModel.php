<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 10/12/14
 * Time: 11:14
 */


class TableRecordModel {

    private $sql;
    private $record;
    private $db;

    protected function __construct($db, $sql) {
        $this->sql = $sql;
        $this->db  = $db;
    }

    public function execute() {
        $this->record = $this->db->query($this->sql);
    }

    public function updateRecord() {

    }

    public function getTableRecord() {
        return $this->record;
    }

}

