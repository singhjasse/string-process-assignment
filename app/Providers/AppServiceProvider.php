<?php

namespace App\Providers;

use App\Interfaces\ProcessStringInterface;
use App\Services\ProcessStringService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProcessStringInterface::class, function (){
            return new ProcessStringService();
        });
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
