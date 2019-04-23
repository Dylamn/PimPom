<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoriesController extends Controller
{
    public function index()
    {
        return Category::all()->toJson(JSON_PRETTY_PRINT);
    }
}
