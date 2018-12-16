<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function getAllCategories()
    {
        return Categorie::all();
    }
}
