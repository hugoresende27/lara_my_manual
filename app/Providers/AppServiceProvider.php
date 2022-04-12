<?php

namespace App\Providers;

use App\Models\Covid;
use App\Observers\CovidObserver;
use Illuminate\Http\Resources\Json\JsonResource;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
//        JsonResource::withoutWrapping();///JSON WRAPPER IN DATA OFF //
        Covid::observe(CovidObserver::class);

    }
}
