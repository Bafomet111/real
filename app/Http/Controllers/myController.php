<?php

namespace App\Http\Controllers;

use App\MyClass\MyClassB;
use App\Services\DateCheck;

class myController extends Controller
{
    private $obj;
    private $date;
    public function __construct(MyClassB $classB, DateCheck $date) {
        $this->obj = $classB;
        $this->date = $date;
    }

    public function index() {
        echo $this->obj->myMethod();
        $this->show();
    }

    private function show()
    {
        dump($this->date->isValid("13/12/2019"));
    }

}
