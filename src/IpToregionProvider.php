<?php

namespace Alezh\laravelIp2region;

use Illuminate\Support\ServiceProvider;

class IpToregionProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton("ip2region", function ()  {
            return new Ip2Region(__DIR__ . '/Data/ip2region.db');
        });
    }
}
