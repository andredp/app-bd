<?php

include_once(__DIR__ . '/includes/config.inc.php');

spl_autoload_extensions(".php");
spl_autoload_register();

//error_reporting(0);

try {
    $pdo = new \PDO("mysql:host=".HOST.";dbname=".DATABASE,
        USER, PASSWORD, [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
} catch (\PDOException $e) {
    echo($e->getMessage());
}

$app = new app\App($pdo);
$app->run();
