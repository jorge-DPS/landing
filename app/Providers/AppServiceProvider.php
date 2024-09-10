<?php

namespace App\Providers;

use App\Models\GlobalConfiguration;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        try {
            if (Schema::hasTable('global_configuration')) {
                $globalConf = GlobalConfiguration::pluck('carrusel_time')->first();
                View::share('carruselTime', $globalConf);
            }

        } catch (QueryException $e) {
            report($e);
        }
    }
}
