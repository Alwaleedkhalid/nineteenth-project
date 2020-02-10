<?php

namespace App\Providers;

// -*- Add as GateContract
use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

// use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(GateContract $gate)
    {
        Schema::defaultStringLength(191);

        $this->registerPolicies($gate);

        $gate->define('isAdmin', function($user){
            return $user->role == 'admin';
        });
        
        $gate->define('isEmployee', function($user){
            return $user->role == 'employee';
        });
        

    }

}
