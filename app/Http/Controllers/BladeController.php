<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function hello()
    {
        $nome = "teste";

        return view('hello', compact('nome'));
    }
}
