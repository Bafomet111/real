<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class myController extends Controller
{
    private $a;

    public function __construct(User $a)
    {
        $this->a = $a;
    }

    public function show($name = 'admin')
    {
        return view('my_view', ['name' => $name]);
    }
}
