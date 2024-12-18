<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\CarruselController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\MetaTagsController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\PublicPageController;
use App\Http\Controllers\SectionTypeController;
use App\Http\Controllers\CoverSectionController;
use App\Http\Controllers\PersonSectionController;
use App\Http\Controllers\GallerySectionController;
use App\Http\Controllers\GlobalConfiguracionController;
use App\Http\Controllers\Backend\SectionGallery\ImageController;

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
    // Route::get('/pages/configuracion/{id}', [SectionController::class, 'index'])->name('pages.configuration.index');
    Route::get('/pages/configuracion/{page:title}', [SectionController::class, 'index'])->name('pages.configuration.index');
    // Route::get('/pages/configuracion/{page:title}/{section:title}', [SectionController::class, 'employees'])->name('pages.configuration.employees');
    Route::get('/pages/configuracion/edit/{id}', [SectionController::class, 'edit'])->name('pages.configuration.edit');


    Route::prefix('/pages/configuracion/{page:title}/{section:title}')->group(function () {
        Route::resource('employees', EmployeeController::class);
    });

    // Route::prefix('/pages/configuracion/{page:title}/{section:title}')->group(function (){
    //     route::resource('images', ImagesController::class);
    //     // [ImagesController::class, 'index'])->name('pages.configuration.');
    // });

    // seccion Galeria:: imagenes
    Route::prefix('/pages/configuracion/{page:title}/{section:title}')->group(function () {
        Route::get('/images', [ImageController::class, 'index'])->name('section-gallery.index');
        Route::get('/{sectionId}/create', [ImageController::class, 'create'])->name('section-gallery.create');
        Route::post('/{sectionId}', [ImageController::class, 'store'])->name('section-gallery.store');
        Route::delete('/{sectionId}/{imageId}', [ImageController::class, 'destroy'])->name('section-gallery.destroy');
    });


    Route::resource('pages', PageController::class);
    // Route::resource('people', PeopleController::class);
    Route::resource('section-type', SectionTypeController::class);
    Route::resource('person-section', PersonSectionController::class);
    // Route::resource('galery-section', GallerySectionController::class);
    Route::resource('cover-section', CoverSectionController::class);

    Route::resource('section', SectionController::class);

    Route::put('updateTimeCarrusel', [GlobalConfiguracionController::class, 'updateTimeCarrusel'])->name('backend.configuracion.updateTimeCarrusel');
    Route::post('/updateOrderMenu', [MenuController::class, 'updateOrder'])->name('backup.connection.updateOrder');

});
