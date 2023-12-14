<?php

class MyClass
{
    private $data = [];

    public function __get($name)
    {
        return $this->data[$name] ?? null;
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
}

$obj = new MyClass();

$obj->zaid = "zaid";

echo $obj->zaid;
