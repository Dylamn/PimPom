<?php

namespace App\Http\Controllers;

use App\Models\Record;
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
        $rents = Record::getRentsByName("Jon");
        return view('userRecord', compact('rents'));
    }
}
