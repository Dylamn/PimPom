<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view("user.index", compact("user"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $st = '$2y$10$fhdUSSmqIHiO7pHO6GEzt.mfxamNse6eI/NW1PGN8xgtGvdg4TpCW' . '<br>';
        echo ($st);
        echo Hash::make('testtest') . '<br>';

//        User::create([
//            'surname' => $request->surname,
//            'firstName' => $request->firstname,
//            'username' => $request->username,
//            'password' => $request->password,
//            'privilege' => $request->privilege,
        //Hash::make($request->newPassword)
//        ]);
//
//        return redirect(route('categorie.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        //$user = User::select('*')->where('surname', '=', $user->surname)->get();

        return view("user.edit", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // TODO : voir le problème lié par rapport au paramètre user
        $user->update([
            'surname' => $request->surname,
            'firstName' => $request->firstname,
            'password' => $request->password,
            'privilege' => $request->privilege,
        ]);

        return redirect(route('utilisateurs.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        return dd($user);
        //$user->delete();

        //return redirect(route('utilisateurs.index'));
    }
}
