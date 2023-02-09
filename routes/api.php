<?php

use App\Http\Controllers\Api\PropertyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('newproperty',[PropertyController::class, 'show'])->name('newproperty');
Route::get('filterdata',[PropertyController::class, 'filter'])->name('filterdata');
Route::get('settingesapp',[PropertyController::class, 'settinges'])->name('settingesapp');
Route::get('forcountry',[PropertyController::class, 'index'])->name('forcountry');
Route::get('searchnameorcountrey',[PropertyController::class, 'search'])->name('searchnameorcountrey');
Route::get('catogerydata',[PropertyController::class, 'create'])->name('catogerydata');
Route::get('propertydetalis/{id}',[PropertyController::class, 'showdetalis'])->name('propertydetalis');

Route::post('updateviews/{id}',[PropertyController::class, 'updateViews'])->name('updateviews');

Route::post('addreport',[PropertyController::class, 'addreport'])->name('addreport');

Route::post('addenqueris',[PropertyController::class, 'addenqueris'])->name('addenqueris');

Route::post('addproperty/{id}',[PropertyController::class, 'updateViews'])->name('addproperty');

Route::get('mostview',[PropertyController::class, 'getMostViewedProperties'])->name('mostview');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');