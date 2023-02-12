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
        Route::get('/dashboard', 'dashboarddata')->name('dashboard')->middleware('admin');
        Route::get('/propertys', 'index')->name('propertys')->middleware('admin');;
        Route::get('/propertyinsertview', 'indexinsert')->name('propertyinsertview');
        Route::post('/property.store', 'store')->name('property.store')->middleware('admin');;
        Route::post('/property.recommended', 'recommended')->name('property.recommended')->middleware('admin');;
        Route::post('/property.edit', 'edit')->name('property.edit')->middleware('admin');;
        Route::post('/property.destroy', 'destroy')->name('property.destroy')->middleware('admin');;
        Route::get('/adsproperty', 'ads')->name('adsproperty')->middleware('admin');;
        Route::get('/test', 'test')->name('test')->middleware('admin');;
    });
    Route::controller(CatogeryController::class)->group(function () {
       // Route::get('/catogery', 'index')->name('catogery');
        Route::get('/catogeryview', 'index')->name('catogeryview')->middleware('admin');;
        Route::post('/catogerystore', 'store')->name('catogery.store')->middleware('admin');;
        Route::post('/catogeryupdate', 'update')->name('catogery.update')->middleware('admin');;
        Route::post('/catogerydestroy', 'destroy')->name('catogery.destroy')->middleware('admin');;
    });


    Route::controller(SettingController::class)->group(function () {
        Route::get('/setting', 'index')->name('setting')->middleware('admin');;
        Route::post('/setting.store', 'store')->name('setting.store')->middleware('admin');;
        Route::post('/setting.update', 'update')->name('setting.update')->middleware('admin');;
        Route::post('/setting.destroy', 'destroy')->name('setting.destroy')->middleware('admin');;
    });

    Route::controller(ReportController::class)->group(function () {
        Route::get('/report', 'index')->name('report')->middleware('admin');;
        Route::post('/report.store', 'store')->name('report.store')->middleware('admin');;
        Route::post('/report.update', 'update')->name('report.update')->middleware('admin');;
        Route::post('/report.destroy', 'destroy')->name('report.destroy')->middleware('admin');;
    });
    Route::controller(EnquiryController::class)->group(function () {
        Route::get('/enquiry', 'index')->name('enquiry')->middleware('admin');;
        Route::post('/enquiry.store', 'store')->name('enquiry.store')->middleware('admin');;
        Route::post('/enquiry.update', 'update')->name('enquiry.update')->middleware('admin');;
        Route::post('/enquiry.destroy', 'destroy')->name('enquiry.destroy')->middleware('admin');;
    });
    Route::controller(UserController::class)->group(function () {
        Route::get('/user', 'index')->name('user');
        Route::post('/user.store', 'store')->name('user.store');
        Route::post('/user.update', 'update')->name('user.update')->middleware('admin');;
        Route::post('/user.destroy', 'destroy')->name('user.destroy')->middleware('admin');;
    });
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    
})->middleware(['auth', 'verified']);//AdminController

//Route::get('/{page}', 'AdminController@index');
require __DIR__.'/auth.php';
Route::get('/{page}', [AdminController::class,'index']);