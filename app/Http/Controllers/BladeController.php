<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function hello()
    {
        $name = "teste";

        return view('hello', compact('name'));
    }
}


