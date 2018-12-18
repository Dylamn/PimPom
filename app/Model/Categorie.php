<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Categorie extends Model
{
    public static function insertCat(Categorie $categorie)
    {
        return DB::insert("INSERT INTO categories (label, adultPrice, childrenPrice, created_at) VALUES ('$categorie->label', $categorie->adultPrice, $categorie->childrenPrice, current_date())");
    }
}
