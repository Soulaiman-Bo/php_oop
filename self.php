<?php 

class ParentClass {
    public static function myMethod() {
        echo "ParentClass::myMethod() called.";
    }
}

class ChildClass extends ParentClass {

    public static function myMethod() {
        echo "ChildClass::myMethod() called.";
    }

    public static function callParent() {
        // Using self:: will always refer to the myMethod in ParentClass
        self::myMethod(); 
    }
}


ChildClass::callParent(); // Output: ParentClass::myMethod() called.
