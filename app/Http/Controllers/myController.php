<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    public function show($name = 'admin')
    {
        return view('my_view', ['name' => $name]);
    }
}
