<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        'App\Models\Model\Producto' => 'App\Policies\ProductoPolicy',
        'App\Models\Model\Pregunta' => 'App\Policies\PreguntaPolicy',
        'App\Models\Model\Respuesta' => 'App\Policies\RespuestaPolicy',
        'App\Models\Model\User' => 'App\Policies\UsuarioPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
