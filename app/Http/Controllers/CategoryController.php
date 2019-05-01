<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Exception;
use App\Http\Requests\UpdateRequest;
use App\Http\Requests\CreateRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view("category.index", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\CreateRequest  $categoryRequest
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $categoryRequest)
    {
        Category::create([
        'label' => $categoryRequest->label,
        'adultPrice' => $categoryRequest->adultPrice,
        'childrenPrice' => $categoryRequest->childrenPrice,
        ]);

        return redirect(route('categorie.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $category = Category::findOrFail($category->id);

        return view("category.edit", compact("category"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\UpdateRequest  $categoryRequest
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $categoryRequest, Category $category)
    {
        $category->update([
            'label' => $categoryRequest->label,
            'adultPrice' => $categoryRequest->adultPrice,
            'childrenPrice' => $categoryRequest->childrenPrice,
        ]);

        return redirect(route('categorie.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     * @throws Exception
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect(route('categorie.index'));
    }

    /**
     * Returns a json where all categories are specified.
     *
     * @return string
     */
    public function getCategories()
    {
        return Category::all()->toJson(JSON_PRETTY_PRINT);
    }
}
