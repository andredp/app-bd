<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 09/12/14
 * Time: 20:07
 */

class Singleton {

    // Hold an instance of the class
    private static $instance;

    // The singleton method
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

    public function who() {
        echo "who:" . __CLASS__;
    }
}


$s = Singleton::getInstance();

echo "##############: " . $s->who();

class A extends Singleton {

    private static $test = "ATEST\n";

    public function test($aaa) {
        echo self::$test;
    }

    public function who() {
        echo "who:" . __CLASS__;
    }
}

class B extends Singleton {

    private static $test = "BTEST\n";

    public function test() {
        echo self::$test;
    }

    public function who() {
        echo "who:" . __CLASS__;
    }

}

?>


<h1>test</h1>

<?php

echo A::test(123);
echo B::test();

$a = A::getInstance();

echo "aaaaaaaa:" . $a->test(123);
echo B::test();

echo A::who();
echo B::who();



?>

