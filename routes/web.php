<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BioController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TouristController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('language/{lang}', function ($lang) {
    Session::put('locale', $lang);
    return redirect()->back();
})->middleware('language');

Route::get('/', [MainController::class, 'index'])->name('btr.index')->middleware('language');
Route::get('/gallery', [MainController::class, 'gallery'])->name('btr.gallery')->middleware('language');
Route::get('/gallery/2', [MainController::class, 'gallery2'])->name('btr.gallery-2')->middleware('language');
Route::get('/gallery/3', [MainController::class, 'gallery3'])->name('btr.gallery-3')->middleware('language');

Route::prefix('about')->group(function () {
    Route::get('/introduction', [AboutController::class, 'introduction'])->name('btr.about-introduction')->middleware('language');
    Route::get('/history', [AboutController::class, 'history'])->name('btr.history')->middleware('language');
    Route::get('/conservation-history', [AboutController::class, 'conservationHistory'])->name('btr.conservation-history')->middleware('language');
    Route::get('/reserve-profile', [AboutController::class, 'reserveProfile'])->name('btr.reserve-profile')->middleware('language');
    Route::get('/forest-type', [AboutController::class, 'forestType'])->name('btr.forest-type')->middleware('language');
    Route::get('/topography', [AboutController::class, 'topography'])->name('btr.topography')->middleware('language');
    Route::get('/significance', [AboutController::class, 'significance'])->name('btr.significance')->middleware('language');
});

Route::prefix('bio')->group(function () {
    Route::get('/introduction', [BioController::class, 'introduction'])->name('btr.bio-introduction')->middleware('language');
    Route::get('/flora', [BioController::class, 'flora'])->name('btr.flora')->middleware('language');
    Route::get('/fauna', [BioController::class, 'fauna'])->name('btr.fauna')->middleware('language');
    Route::get('/avifauna', [BioController::class, 'avifauna'])->name('btr.avifauna')->middleware('language');
    Route::get('/butterflies', [BioController::class, 'butterflies'])->name('btr.butterflies')->middleware('language');
    Route::get('/rare-species', [BioController::class, 'rareSpecies'])->name('btr.rare-species')->middleware('language');
});

Route::prefix('tourist')->group(function () {
    Route::get('/location', [TouristController::class, 'location'])->name('btr.location')->middleware('language');
    Route::get('/how-to-reach', [TouristController::class, 'howToReach'])->name('btr.how-to-reach')->middleware('language');
    Route::get('/best-time-to-visit', [TouristController::class, 'bestTimeToVisit'])->name('btr.best-time-to-visit')->middleware('language');
    Route::get('/weather', [TouristController::class, 'weather'])->name('btr.weather')->middleware('language');
    Route::get('/safari-zones', [TouristController::class, 'safariZones'])->name('btr.safari-zones')->middleware('language');
    Route::get('/excursion-and-charges', [TouristController::class, 'excursion'])->name('btr.excursion')->middleware('language');
    Route::get('/point-of-interests', [TouristController::class, 'pointOfInterests'])->name('btr.point-of-interests')->middleware('language');
    Route::get('/stay', [TouristController::class, 'stay'])->name('btr.stay')->middleware('language');
    Route::get('/dos', [TouristController::class, 'dos'])->name('btr.dos')->middleware('language');
});

Route::prefix('management')->group(function () {
    Route::get('/admin-body', [ManagementController::class, 'adminBody'])->name('btr.admin-body')->middleware('language');
    Route::get('/goals', [ManagementController::class, 'goals'])->name('btr.goals')->middleware('language');
    Route::get('/objectives', [ManagementController::class, 'objectives'])->name('btr.objectives')->middleware('language');
    Route::get('/training', [ManagementController::class, 'training'])->name('btr.training')->middleware('language');
    Route::get('/contact', [ManagementController::class, 'contact'])->name('btr.contact')->middleware('language');
});

Auth::routes();

Route::group(['prefix' => 'superadmin', 'middleware' => ['auth', 'isSuperadmin', 'prevent-back-history']], function () {
    // For Super Admin Dashboard
    Route::get('/dashboard', [SuperAdminController::class, 'index'])->name('dashboard')->middleware('language');
    Route::get('/role-edit/{id}', [SuperAdminController::class, 'editUserRole'])->name('editUserRole');
    Route::put('/role-update/{id}', [SuperAdminController::class, 'updateUserRole'])->name('updateUserRole');
    Route::delete('/role-delete/{id}', [SuperAdminController::class, 'deleteUserRole'])->name('deleteUserRole');
    Route::get('/changeuserstatus', [SuperAdminController::class, 'changeUserStatus'])->name('changeUserStatus');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin', 'prevent-back-history']], function () {
    // For Newses Routes
    Route::get('/news', [NewsController::class, 'newsShow'])->name('news_show')->middleware('language');
    Route::post('/news-create', [NewsController::class, 'newsCreate'])->name('news_create');
    Route::get('/news-edit/{id}', [NewsController::class, 'newsEdit'])->name('news_edit');
    Route::post('/news-update/{id}', [NewsController::class, 'newsUpdate'])->name('news_update');
    Route::delete('/news-del/{id}', [NewsController::class, 'newsDelete'])->name('news_delete');

    // For Events Routes
    // Route::get('/event', [NewsController::class, 'eventShow'])->name('event_show');
    // Route::post('/event-create', [NewsController::class, 'eventCreate'])->name('event_create');
    // Route::get('/event-edit/{id}', [NewsController::class, 'eventEdit'])->name('event_edit');
    // Route::put('/event-update/{id}', [NewsController::class, 'eventUpdate'])->name('event_update');
    // Route::delete('/event-delete/{id}', [NewsController::class, 'eventDelete'])->name('event_delete');

    // For Gallery Routes
    Route::get('images', [GalleryController::class, 'create'])->name('images');
    Route::post('images-save', [GalleryController::class, 'store'])->name('images-save');
    Route::delete('images-delete/{id}', [GalleryController::class, 'destroy'])->name('images-delete');
    Route::get('images-show', [GalleryController::class, 'index'])->name('images-show');
});
