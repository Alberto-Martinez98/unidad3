<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Pregunta;
use Illuminate\Auth\Access\HandlesAuthorization;

class RespuestaPolicy
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

    public function responder(Usuario $usuario, Pregunta $pregunta)
    {
        return $usuario->rol == "Cliente" && is_null($pregunta->respuestas);
    }
}
