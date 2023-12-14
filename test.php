<?php

class Example {
    protected static $staticProperty = "Static property in Example";
    protected static $selfProperty = "Self property in Example";

    public static function getStaticProperty() {
        echo static::$staticProperty . "\n";
    }

    public static function getSelfProperty() {
        echo self::$selfProperty . "\n";
    }
}

class AnotherExample extends Example {
    protected static $staticProperty = "Static property in AnotherExample";
    protected static $selfProperty = "Self property in AnotherExample";
}

// Using static keyword
Example::getStaticProperty();        // Output: Static property in Example
AnotherExample::getStaticProperty(); // Output: Static property in AnotherExample

// Using self keyword
Example::getSelfProperty();          // Output: Self property in Example
AnotherExample::getSelfProperty();   // Output: Self property in Example


