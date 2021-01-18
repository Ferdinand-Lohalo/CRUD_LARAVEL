<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    protected $fillable = ['marque', 'prix', 'image'];
/* 
    public function getPrice() //Méthode de formatatge de prix
    {
        $price = $this->price/100;
        return number_format($price, 2, ',', ''). ' $';
    } */
}
