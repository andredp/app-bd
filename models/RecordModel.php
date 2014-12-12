<?php

namespace models;

class RecordModel {

    private $records = false;
    private $db;

    protected function __construct($db) {
        $this->db  = $db;
    }

    public function execute($sql) {
        return $this->records = $this->db->query($sql);
    }

    public function beginTransaction() {
        return $this->db->beginTransaction();
    }

    public function exec($sql) {
        return $this->records = $this->db->exec($sql);
    }

    public function commit() {
        $this->db->commit();
    }

    public function getRecordCount() {
        if (!$this->records) {
            return 0;
        } else {
            return $this->records->rowCount();
        }
    }

    public function getRecord() {

        if (self::getRecordCount() == 0) {
            return null;
        } else {
            return $this->records;
        }
    }
}

