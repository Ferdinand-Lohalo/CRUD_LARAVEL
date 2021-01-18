<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory;
    protected $fillable = ['id','quantite', 'prix_total'];

    public function sommePrix()
    {
        $somme = DB::table("commandes")
            ->where("id")
            ->sum(DB::raw("prix_total * quantite"));
        return $somme;
    }
}