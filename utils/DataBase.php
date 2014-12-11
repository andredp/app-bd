<?php
/**
 * Created by PhpStorm.
 * User: andredp
 * Date: 11/12/14
 * Time: 00:28
 */

namespace utils;

class DataBase {

    private $host;
    private $database;
    private $user;
    private $password;

    private $connection = null;

    public function __construct($host, $database, $user, $password) {
        $this->host     = $host;
        $this->database = $database;
        $this->user     = $user;
        $this->password = $password;
    }

    private function init() {
        try {
            $this->connection = new \PDO("mysql:host=$this->host;dbname=$this->database",
                $this->user, $this->password, [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING]);
        } catch (\PDOException $e) {
            echo($e->getMessage());
        }
    }

    public function query($sql) {
        if ($this->connection == null) {
            $this->init();
        }
        return $this->connection->query($sql);
    }

}
