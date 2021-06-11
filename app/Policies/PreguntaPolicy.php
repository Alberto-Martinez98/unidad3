<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Producto;
use Illuminate\Auth\Access\HandlesAuthorization;

class PreguntaPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function preguntar(Usuario $usuario, Producto $producto)
    {
        return $usuario->rol == "Cliente" && $usuario->id != $producto->user_id;
    }


    
}

