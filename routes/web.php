<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BioController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\TenderController;
use App\Http\Controllers\TouristController;
use Illuminate\Support\Facades\Artisan;
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

// Route::get('/down', function () {
//     return Artisan::call('down');
// });

// Route::get('/up', function () {
//     return Artisan::call('up');
// });

// Route::get('language/{lang}', function ($lang) {
//     Session::put('locale', $lang);
//     return redirect()->back();
// })->middleware('language');

Route::get('lang/{lang}', [LanguageController::class, 'switchLang'])->name('lang.switch')->middleware('language');

Route::match(['get', 'post'], '/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', [MainController::class, 'index'])->name('btr.index')->middleware('language');
Route::get('/gallery', [GalleryController::class, 'gallery'])->name('btr.gallery')->middleware('language');
Route::get('/tender-download/{filename}', [TenderController::class, 'download'])->name('btr.tender.download');
Route::get('/docs-download/{filename}', [DocumentController::class, 'download'])->name('btr.docs.download');

Route::prefix('tender')->group(function () {
    Route::get('/tenders', [TenderController::class, 'tenders'])->name('btr.tenders')->middleware('language');
});

Route::prefix('document')->group(function () {
    Route::get('/documents', [DocumentController::class, 'docs'])->name('btr.docs')->middleware('language');
});

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

Route::prefix('news')->group(function () {
    Route::get('/newses', [MainController::class, 'newses'])->name('btr.newses')->middleware('language');
    Route::get('/news-details/{slug}', [MainController::class, 'news_details'])->name('btr.news-details')->middleware('language');
});

Auth::routes();

Route::group(['prefix' => 'superadmin', 'middleware' => ['auth', 'isSuperadmin', 'prevent-back-history']], function () {
    // Account Settings
    Route::get('profile', [SettingsController::class, 'index'])->name('suadmin.profile');
    Route::match(['get', 'put'], 'profile-update', [SettingsController::class, 'updateProfile'])->name('suadmin.profile.update');
    Route::get('changePassword', [SettingsController::class, 'changePassword'])->name('suadmin.changePassword');
    Route::match(['get', 'put'], 'updatePassword', [SettingsController::class, 'updatePassword'])->name('suadmin.updatePassword');
    Route::get('adminChangePassword/{id}', [SettingsController::class, 'adminChangePassword'])->name('suadmin.changeadminpassword');
    Route::match(['get', 'put'], 'adminUpdatePassword/{id}', [SettingsController::class, 'adminUpdatePassword'])->name('suadmin.updateadminpassword');

    // For Super Admin Dashboard
    Route::get('/dashboard', [SuperAdminController::class, 'index'])->name('superadmin.dashboard')->middleware('language');
    Route::get('/role-edit/{id}', [SuperAdminController::class, 'editUserRole'])->name('editUserRole')->middleware('language');
    Route::match(['get', 'put'], '/role-update/{id}', [SuperAdminController::class, 'updateUserRole'])->name('updateUserRole')->middleware('language');
    Route::delete('/role-delete/{id}', [SuperAdminController::class, 'deleteUserRole'])->name('deleteUserRole')->middleware('language');
    Route::get('/changeuserstatus', [SuperAdminController::class, 'changeUserStatus'])->name('changeUserStatus')->middleware('language');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin', 'prevent-back-history']], function () {
    // For Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard')->middleware('language');

    // For Newses Routes
    Route::get('newses', [NewsController::class, 'index'])->name('newses.index');
    Route::get('newses/create', [NewsController::class, 'create'])->name('newses.create');
    Route::match(['get', 'post'], 'newses/store', [NewsController::class, 'store'])->name('newses.store');
    Route::get('newses/{id}/edit', [NewsController::class, 'edit'])->name('newses.edit');
    Route::match(['get', 'put'], 'newses/{id}/update', [NewsController::class, 'update'])->name('newses.update');
    Route::match(['get', 'delete'], 'newses/{id}', [NewsController::class, 'destroy'])->name('newses.destroy');
    Route::delete('deleteNewsImage/{id}', [NewsController::class, 'deleteNewsImage'])->name('newses.destroy_image');
    Route::delete('deleteNewsImages/{id}', [NewsController::class, 'deleteNewsImages'])->name('newses.destroy_images');

    // For Gallery Routes
    Route::get('images', [GalleryController::class, 'index'])->name('images.index');
    Route::get('images/create', [GalleryController::class, 'create'])->name('images.create');
    Route::match(['get', 'post'], 'images/store', [GalleryController::class, 'store'])->name('images.store');
    Route::get('images/show', [GalleryController::class, 'show'])->name('images.show');
    Route::match(['get', 'delete'], 'images/{id}', [GalleryController::class, 'destroy'])->name('images.destroy');

    // For Tender Quotation
    Route::get('tender', [TenderController::class, 'index'])->name('tender.index');
    Route::get('tender/create', [TenderController::class, 'create'])->name('tender.create');
    Route::match(['get', 'post'], 'tender/store', [TenderController::class, 'store'])->name('tender.store');
    Route::get('tender/{id}/edit', [TenderController::class, 'edit'])->name('tender.edit');
    Route::match(['get', 'post'], 'tender/{id}/update', [TenderController::class, 'update'])->name('tender.update');
    Route::match(['get', 'delete'], 'tender/{id}', [TenderController::class, 'destroy'])->name('tender.destroy');

    // For Documents
    Route::get('document', [DocumentController::class, 'index'])->name('document.index');
    Route::get('document/create', [DocumentController::class, 'create'])->name('document.create');
    Route::match(['get', 'post'], 'document/store', [DocumentController::class, 'store'])->name('document.store');
    Route::get('document/{id}/edit', [DocumentController::class, 'edit'])->name('document.edit');
    Route::match(['get', 'post'], 'document/{id}/update', [DocumentController::class, 'update'])->name('document.update');
    Route::match(['get', 'delete'], 'document/{id}', [DocumentController::class, 'destroy'])->name('document.destroy');

    // Account Settings
    Route::get('profile', [SettingsController::class, 'index'])->name('btr.admin.profile');
    Route::match(['get', 'put'], 'profile-update', [SettingsController::class, 'updateProfile'])->name('btr.admin.profile.update');
    Route::get('changePassword', [SettingsController::class, 'changePassword'])->name('btr.admin.changePassword');
    Route::match(['get', 'put'], 'updatePassword', [SettingsController::class, 'updatePassword'])->name('btr.admin.updatePassword');
});
