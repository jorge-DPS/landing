<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\CarruselController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CoverSectionController;
use App\Http\Controllers\GallerySectionController;
use App\Http\Controllers\GlobalConfiguracionController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\MetaTagsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PersonSectionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicPageController;
use App\Http\Controllers\SectionTypeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route; 

Route::get('/', function () {
    return view('frontend.home.index');
});

Route::get('p/{slug}', [PublicPageController::class, 'show']);


//authRoute
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

//generalRoute
Route::middleware(['auth'])->group(function () {

    //nativeRoute
    Route::resource('users', UserController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('metatags', MetaTagsController::class);
    Route::resource('carrusel', CarruselController::class);
    Route::resource('company', CompanyController::class);

    Route::resource('menu', MenuController::class);
    Route::delete('menu/delete', [MenuController::class, 'destroy'])->name('menu.delete');
    Route::post('menu/update', [MenuController::class, 'update'])->name('menu.update');
    Route::get('/pages/configuracion/{id}', [SectionController::class, 'index'])->name('pages.configuration.index');
    Route::get('/pages/configuracion/edit/{id}', [SectionController::class, 'edit'])->name('pages.configuration.edit');

    Route::resource('pages', PageController::class);
    Route::resource('people', PeopleController::class);
    Route::resource('section-type', SectionTypeController::class);
    Route::resource('person-section', PersonSectionController::class);
    Route::resource('galery-section', GallerySectionController::class);
    Route::resource('cover-section', CoverSectionController::class);

    Route::resource('section', SectionController::class);

    Route::put('updateTimeCarrusel', [GlobalConfiguracionController::class, 'updateTimeCarrusel'])->name('backend.configuracion.updateTimeCarrusel');
    Route::post('/updateOrderMenu', [MenuController::class, 'updateOrder'])->name('backup.connection.updateOrder');

});
