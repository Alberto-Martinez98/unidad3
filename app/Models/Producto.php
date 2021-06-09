<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    public $timestamps = false;

    //relacion uno a muchos (inversa)

    public function categorias(){
    	return $this->belongsTo('App\Models\Categoria');
    }
}