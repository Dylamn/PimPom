<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userRentsController extends Controller
{
    /**
     * Show the user rents.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $rents = Rent::getRentsByName(Auth::user()->username);
        return view('userRents', compact('rents'));
    }
}
