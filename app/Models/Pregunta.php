<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
	protected $table="preguntas";
    use HasFactory;
    public $timestamps = false;

     public function productos(){
    	return $this->belongsTo('App\Models\Producto');
    }

    public function respuestas(){
        return $this->hasMany('App\Models\Respuesta');
    }

}
