<?php

namespace models;

class BidDetailModel extends RecordModel {

    private $records = [];

    public function __construct($db) {
        parent::__construct($db);
    }

    public function storeExecute($name, $sql) {
        $this->records["$name"] = parent::execute($sql);
    }

    public function getStoredRecord($name) {
        return isset($this->records["$name"]) ? $this->records["$name"] : null;
    }

}