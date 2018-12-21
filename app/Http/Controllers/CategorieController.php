<?php

namespace App\Http\Controllers;

use App\Model\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categorie::all();

        return view("categorie.index", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Categorie::create([
        'label' => $request->label,
        'adultPrice' => $request->adultPrice,
        'childrenPrice' => $request->childrenPrice,
        ]);

        return redirect('/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function show(Categorie $categorie)
    {
        // Todo : Créer la vue categorie.show

        return response($categorie)->json();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function edit(Categorie $categorie)
    {
        $categorie = Categorie::findOrFail($categorie->id);

        return view("categorie.edit", compact("categorie"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Categorie  $categorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categorie $categorie)
    {
        $categorie->update([
            'label' => $request->label,
            'adultPrice' => $request->adultPrice,
            'childrenPrice' => $request->childrenPrice,
        ]);

        return redirect('/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Categorie  $categorie
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Categorie $categorie)
    {
        $categorie->delete();

        return redirect('/categorie');
    }
}
