<?php

use App\Http\Controllers\Auth\AuthenticatedController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\TouristPackageController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'users'], function(){
    Route::post('/register', RegisteredUserController::class);
    Route::get('/login',[AuthenticatedController::class,'login']);
    Route::delete('/logout',[AuthenticatedController::class,'logout'])->middleware('auth:sanctum');
});

Route::group([
    'middleware' => 'auth:sanctum'
], function(){
    
    Route::group(['prefix' => 'sites'], function(){
        Route::get('/',[SiteController::class,'index'])->name('sites.index');
        Route::get('/{site}',[SiteController::class,'show'])->name('sites.show');
        Route::post('/',[SiteController::class,'store'])->name('sites.store');
        Route::match(['put','patch'],'/{site}',[SiteController::class,'update'])->name('sites.update');
        Route::delete('/{site}',[SiteController::class,'destroy'])->name('sites.destroy');
    });

    Route::group(['prefix' => 'reservations'], function(){
        Route::get('/',[ReservationController::class,'index'])->name('reservations.index');
        Route::get('/{reservation}',[ReservationController::class,'show'])->name('reservations.show');
        Route::post('/',[ReservationController::class,'store'])->name('reservations.store');
        Route::match(['put','patch'],'/{reservation}',[ReservationController::class,'update'])->name('reservations.update');
        Route::delete('/{reservation}',[ReservationController::class,'destroy'])->name('reservations.destroy');
    });

    Route::group(['prefix' => 'touristPackages'],function(){
        Route::get('/',[TouristPackageController::class,'index'])->name('touristPackages.index');
        Route::get('/{touristPackage}',[TouristPackageController::class,'show'])->name('touristPackages.show');
        Route::post('/',[TouristPackageController::class,'store'])->name('touristPackages.store');
        Route::match(['put','patch'],'/{touristPackage}',[TouristPackageController::class,'update'])->name('touristPackages.update');
        Route::delete('/{touristPackage}',[TouristPackageController::class,'destroy'])->name('touristPackages.destroy');
    });

});
