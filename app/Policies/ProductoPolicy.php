<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Producto;

use Illuminate\Auth\Access\HandlesAuthorization;

class ProductoPolicy
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

    public function create(User $usuario)
    {   
        return $usuario->rol == "Cliente";
    }

    public function edit(User $usuario, Producto $prod)
    {
        if ($usuario->rol == "Cliente") {
            return $usuario->id == $prod->user_id;
        }
        elseif ($usuario->rol == "Supervisor") {
            return true;
        }
        
    }

    public function destroy(User $usuario, Producto $prod)
    {
        if ($usuario->rol == "Cliente") {
            return $usuario->id == $prod->user_id;
        }
        elseif ($usuario->rol == "Supervisor") {
            return true;
        }
        
    }
}
