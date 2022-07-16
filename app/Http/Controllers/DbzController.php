<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class DbzController extends BaseController
{
    public function dbz()
    {
        $energy = 8000;

        return view('dbz', compact('energy'));
    }
}
