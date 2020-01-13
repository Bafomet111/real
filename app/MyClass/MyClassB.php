<?php


namespace App\MyClass;


class MyClassB
{
    private $action;
    public function __construct($action) {
        $this->action = $action;
    }
    public function myMethod() {
        return "Laravel - ".$this->action;
    }
}