<?php


namespace utils;

class Session {

    public static function login($username, $name) {
        Session::set("username", $username);
        Session::set("name", $name);
    }

    public static function isLoggedIn() {
        return Session::get("username");
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
        session_start();
        session_destroy();
        $_SESSION = [];
    }

}
