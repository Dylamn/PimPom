<?php

namespace App\Http\Controllers;

use App\Models\Rent;
use Illuminate\Http\Request;

class UserRecordController extends Controller
{
    /**
     * Show the user previous rents.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $rents = Rent::getRentsByName("Jon");
        return view('userRecord', compact('rents'));
    }
}
