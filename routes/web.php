<?php
use App\Http\Controllers\GlobalConfiguracionController;
use App\Http\Controllers\CoverController;
use App\Http\Controllers\CoverSectionController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\GallerySectionController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\PersonSectionController;
use App\Http\Controllers\SectionTypeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MetaTagsController;
use App\Http\Controllers\CarruselController;
use App\Http\Controllers\CompanyController;
use App\Models\Carrusel;

Route::get('/', function () {
    $carrusels = Carrusel::all();
    return view('frontend.home.index', compact('carrusels'));
});

//auth route
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

//general route
Route::middleware(['auth'])->group(function () {

    Route::group(['prefix' => 'usuarios'], function () {
        Route::get('/', [UserController::class, 'index'])->name('backend.user.index');
    });

    Route::get('/profile', [ProfileController::class, 'index'])->name('user.profile');
    Route::post('/profile', [ProfileController::class, 'store'])->name('user.profile.store');

    //rutasNative
    Route::resource('metatags', MetaTagsController::class);
    Route::resource('carrusel', CarruselController::class);
    Route::resource('company', CompanyController::class);
    Route::resource('menu', MenuController::class);
    Route::resource('pages', PageController::class);
    Route::resource('employe', EmployeController::class);
    Route::resource('cover', CoverController::class);
    Route::resource('people', PeopleController::class);
    Route::resource('section-type', SectionTypeController::class);
    Route::resource('person-section', PersonSectionController::class);
    Route::resource('galery-section', GallerySectionController::class);
    Route::resource('cover-section', CoverSectionController::class);

    Route::put('updateTimeCarrusel', [GlobalConfiguracionController::class, 'updateTimeCarrusel'])->name('backend.configuracion.updateTimeCarrusel');



});

