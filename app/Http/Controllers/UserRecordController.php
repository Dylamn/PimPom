<?php

namespace App\Http\Controllers;

use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserRecordController extends Controller
{
    /**
     * Show the user previous rents.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $records = Record::getRecordByName(Auth::user()->username);
        return view('userRecord', compact('records'));
    }
}
