<?php

namespace models;

class TableRecordModel {

    private $sql;
    private $record;
    private $db;

    protected function __construct($db) {
        $this->db  = $db;
    }

    public function setQuery($sql) {
        $this->sql = $sql;
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

