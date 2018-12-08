<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReserverController extends Controller
{
    public function getInfos()
    {
        return view('reserver/reserver');
    }

    public function postInfos(Request $request)
    {
        return print_r($request);
    }
}
