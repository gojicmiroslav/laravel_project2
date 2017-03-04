<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FooServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        echo "<br>";    
        echo "Hello from boot method in FooServiceProvider";
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        var_dump('HELLO FROM FOO SERVICE PROVIDER');
    }
}
