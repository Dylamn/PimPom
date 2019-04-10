<?php

namespace App\Http\Controllers;

use App\Model\Rents;
use App\Models\Rent;
use Illuminate\Http\Request;

class RecordController extends Controller
{
    /**
     * Show the previous rents.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $all = Rent::all();
        return view('record.index', compact('all'));
    }
}
