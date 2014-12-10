<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09/12/14
 * Time: 19:53
 */

class Session2 {

    /*
    private static $instance;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    protected function __construct() {
    }

    protected function __clone() {
    }
    */
    public static function setVar($name, $value) {
        session_start();
        $_SESSION[$name] = $value;
    }

    public static function getVar($name) {
        session_start();
        return isset($_SESSION[$name]) ? $_SESSION[$name] : null;
    }

}


echo "AAAAA: " . Session2::getVar('namee');

?>

<h1>test session 2</h1>
<a href="./Session.php">link</a>