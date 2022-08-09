<?php

namespace App\Providers;

// use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Laravel\Socialite\Contracts\Factory;
use Laravel\Socialite\Two\UIDProvider;

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
    public function boot()
    {
        Paginator::useBootstrap();

        $socialite = $this->app->make(Factory::class);
        $socialite->extend('uid', function () use ($socialite) {
            $config = config('services.uid');

            return $socialite->buildProvider(UIDProvider::class, $config);
        });
    }
}
