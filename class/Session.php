<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09/12/14
 * Time: 19:53
 */

class Session {

    public static function login($username, $name) {
        Session::set("username", $username);
        Session::set("name", $name);
    }

    public static function isLoggedIn() {
        return Session::get("username") != null;
    }

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
