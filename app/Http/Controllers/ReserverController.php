<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReserverController extends Controller
{
    public function index()
    {
        return view('reserver.index');
    }

    public function store(Request $request)
    {
        return print_r($request);
    }
}
