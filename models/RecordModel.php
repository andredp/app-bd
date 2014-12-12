<?php

namespace models;

class RecordModel {

    private $records = false;
    private $pdo;

    protected function __construct($pdo) {
        $this->pdo  = $pdo;
    }

    public function execute($sql) {
        return $this->records = $this->pdo->query($sql);
    }

    public function beginTransaction() {
        return $this->pdo->beginTransaction();
    }

    public function exec($sql) {
        return $this->records = $this->pdo->exec($sql);
    }

    public function commit() {
        $this->pdo->commit();
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

