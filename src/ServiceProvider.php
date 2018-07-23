<?php

namespace Laravolt\Envi;

use Illuminate\Support\ServiceProvider as SP;

class ServiceProvider extends SP
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Copy
        $this->publishes([
            __DIR__.'/../migrations/' => database_path('migrations')
        ], 'migrations');

        $this->loadRoutes();
//        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'envi');

        $this->loadMigrationsFrom(__DIR__.'/../migrations');

        app('laravolt.menu')->add('Environtment variables', route('envi::show'));

        


    	// dump('boot');
        // return new StdClass();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // dump('boot');
    	// exit('register');
        // return ['envi'];
    }
    protected function loadRoutes()
    {
        $router = $this->app['router'];
        require __DIR__.'/../routes/web.php';
    }
}
