<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuesta extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function preguntas(){
    	return $this->belongsTo('App\Models\Pregunta');
    }
}
