<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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
use App\Http\Controllers\GlobalConfiguracionController;
use App\Http\Controllers\Backend\SectionGallery\ImageController;
use App\Http\Controllers\Backend\SectionPortada\PortadaController;
use App\Http\Controllers\Frontend\Pages\ContactController;
use App\Http\Controllers\Frontend\Pages\EmployeesController;
use App\Http\Controllers\Frontend\Pages\GalleryController;

Route::get('/', function () {
    return view('frontend.home.index');
});

Route::get('page/contacto', [ContactController::class, 'show'])->name('page.contact');

Route::get('page/{page:slug}', [PublicPageController::class, 'show'])->name('page-content');
Route::get('page/{page:slug}/people/{section:title}', [EmployeesController::class, 'employees'])->name('pages.employees');
Route::get('page/{page:slug}/gallery/{section:title}', [GalleryController::class, 'gallery'])->name('page.gallery');


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
    Route::post('/pages/configuracion/{page:title}', [SectionController::class, 'store'])->name('pages.configuration.store');
    Route::post('/pages/configuracion/sections/update-order', [SectionController::class, 'updateOrder'])->name('sections.updateOrder');
    // Route::get('/pages/configuracion/{page:title}/{section:title}', [SectionController::class, 'employees'])->name('pages.configuration.employees');
    // Route::get('/pages/configuracion/edit/{id}', [SectionController::class, 'edit'])->name('pages.configuration.edit');
    Route::delete('/pages/configuracion/{page:title}/delete/{section}', [SectionController::class, 'destroy'])->name('pages.configuration.delete');



    Route::prefix('/pages/configuracion/{page:title}/{section:title}')->group(function () {
        Route::resource('employees', EmployeeController::class);
        Route::get('/portada', [PortadaController::class, 'index'])->name('portada.index');
        Route::get('/portada/crear', [PortadaController::class, 'create'])->name('portada.create');
        Route::get('/portada/editar/{cover}', [PortadaController::class, 'edit'])->name('portada.edit');
    });

    Route::prefix('/pages/configuracion/{page:title}/{section:title}')->group(function (){
        Route::get('/images', [ImageController::class, 'index'])->name('section-gallery.index');
        // [ImagesController::class, 'index'])->name('pages.configuration.images.index');
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
