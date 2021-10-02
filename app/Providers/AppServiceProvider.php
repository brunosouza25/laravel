<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

 //Linha adicionada por causa do erro SQLSTATE[42S01]
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
        //Linha adicionada por causa do erro SQLSTATE[42S01]
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
