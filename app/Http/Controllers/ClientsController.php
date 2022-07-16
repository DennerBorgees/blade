<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ClientsController extends BaseController
{
    public function clients()
    {
        $names = [
            'Marcos',
            'Leandro',
            'Denner',
            'Guilherme'
        ];

        return view('clients', compact('names'));
    }
}
