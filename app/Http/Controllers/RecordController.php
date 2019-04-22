<?php

namespace App\Http\Controllers;

use App\Models\Record;
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
        $all = Record::all();
        return view('record.index', compact('all'));
    }
}
