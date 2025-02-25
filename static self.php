<?php
// Declaring parent class
class demo {
    public static $bar = 10;
    public static function func() {
        echo static::$bar . "\n";
    }
}
// Declaring child class
class Child extends demo {
    public static $bar = 20;
    public static function func() {

        echo self::$bar . "\n";

    }
}

demo::func();

Child::func();
?>