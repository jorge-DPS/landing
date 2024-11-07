<?php

namespace App\Providers;

use App\Models\GlobalConfiguration;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Services\CarruselService;
use App\Services\MenuService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    public function boot(CarruselService $carruselService, MenuService $menuService ): void
    {
        try {
            if (Schema::hasTable('global_configuration')) {
                $globalConf = GlobalConfiguration::pluck('carrusel_time')->first();
                View::share('carruselTime', $globalConf);
            }

            $carrusels = $carruselService->getAllCarrusel();
            $menuGeneral = $menuService->getAll();
    
            // Compartir las variables con todas las vistas
            View::share('carrusels', $carrusels);
            View::share('menuGeneral', $menuGeneral);

        } catch (QueryException $e) {
            report($e);
        }
    }
}
