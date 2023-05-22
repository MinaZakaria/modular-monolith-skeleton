<?php

namespace Laracon\Order\Providers;

use Illuminate\Support\ServiceProvider;

class OrderServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/../Infrastructure/Database/Migrations');
        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'order');

        // $this->loadViewsFrom(__DIR__.'/../Resources/views', 'order');

        // $this->loadViewComponentsAs('order', [
        //     Alert::class,
        //     Button::class,
        // ]);
    }

    public function register()
    {
        $this->app->register(AuthServiceProvider::class);
        $this->app->register(EventServiceProvider::class);
        $this->app->register(RouteServiceProvider::class);

        // $this->mergeConfigFrom(__DIR__ . '/../config/order.php', 'order');
    }
}
