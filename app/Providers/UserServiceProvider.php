<?php

namespace App\Providers;

use App\User;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->when(UserRepository::class)
            ->needs(User::class)
            ->give(function() {
                $route = request()->route();

                if ($route && $route->hasParameter('user')) {
                    return User::findOrFail($route->parameter('user'));
                }

                throw new \Exception('Usuário não foi encontrado', 404);
            });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
