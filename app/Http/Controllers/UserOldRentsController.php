<?php

namespace App\Http\Controllers;

use App\Model\Rents;
use Illuminate\Http\Request;

class UserOldRentsController extends Controller
{
    /**
     * Show the user previous rents.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $rents = Rents::getRentsByName("Jon");
        return view('userOldRents', compact('rents'));
    }
}
