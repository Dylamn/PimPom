<?php

namespace App\Http\Controllers;

use App\Model\Rents;
use Illuminate\Http\Request;

class userRentsController extends Controller
{
    /**
     * Show the user rents.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $rents = Rents::getRentsByName("Jon");
        return view('userRents', compact('rents'));
    }
}
