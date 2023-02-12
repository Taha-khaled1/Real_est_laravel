<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatogeryController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('auth\login');
});

// Route::get('/dashboard', function () {
//     return view('realest.dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {

  Route::controller(PropertyController::class)->group(function () {
        Route::get('/dashboarddata', 'dashboarddata')->name('dashboarddata');
        Route::get('/propertys', 'index')->name('propertys');
        Route::get('/propertyinsertview', 'indexinsert')->name('propertyinsertview');
        Route::post('/property.store', 'store')->name('property.store');
        Route::post('/property.recommended', 'recommended')->name('property.recommended');
        Route::post('/property.edit', 'edit')->name('property.edit');
        Route::post('/property.destroy', 'destroy')->name('property.destroy');
        Route::get('/adsproperty', 'ads')->name('adsproperty');
    });
    Route::controller(CatogeryController::class)->group(function () {
       // Route::get('/catogery', 'index')->name('catogery');
        Route::get('/catogeryview', 'index')->name('catogeryview');
        Route::post('/catogerystore', 'store')->name('catogery.store');
        Route::post('/catogeryupdate', 'update')->name('catogery.update');
        Route::post('/catogerydestroy', 'destroy')->name('catogery.destroy');
    });


    Route::controller(SettingController::class)->group(function () {
        Route::get('/setting', 'index')->name('setting');
        Route::post('/setting.store', 'store')->name('setting.store');
        Route::post('/setting.update', 'update')->name('setting.update');
        Route::post('/setting.destroy', 'destroy')->name('setting.destroy');
    });

    Route::controller(ReportController::class)->group(function () {
        Route::get('/report', 'index')->name('report');
        Route::post('/report.store', 'store')->name('report.store');
        Route::post('/report.update', 'update')->name('report.update');
        Route::post('/report.destroy', 'destroy')->name('report.destroy');
    });
    Route::controller(EnquiryController::class)->group(function () {
        Route::get('/enquiry', 'index')->name('enquiry');
        Route::post('/enquiry.store', 'store')->name('enquiry.store');
        Route::post('/enquiry.update', 'update')->name('enquiry.update');
        Route::post('/enquiry.destroy', 'destroy')->name('enquiry.destroy');
    });
    Route::controller(UserController::class)->group(function () {
        Route::get('/user', 'index')->name('user');
        Route::post('/user.store', 'store')->name('user.store');
        Route::post('/user.update', 'update')->name('user.update');
        Route::post('/user.destroy', 'destroy')->name('user.destroy');
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    
})->middleware(['auth', 'verified']);//AdminController

//Route::get('/{page}', 'AdminController@index');
require __DIR__.'/auth.php';
Route::get('/{page}', [AdminController::class,'index']);