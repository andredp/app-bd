<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09/12/14
 * Time: 19:53
 */

class Session {

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
    public static function set($name, $value) {
        session_start();
        $_SESSION[$name] = $value;
    }

    public static function get($name) {
        session_start();
        return isset($_SESSION[$name]) ? $_SESSION[$name] : null;
    }

    public static function destroy() {
        session_destroy();
    }

}
