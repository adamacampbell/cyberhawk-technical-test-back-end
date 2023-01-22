<?php

use App\Http\Controllers\FarmController;
use App\Http\Controllers\TurbineController;
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

// Farm api requests
Route::group(['prefix' => 'farms'], function() {
    Route::apiResource('', FarmController::class);
    Route::get('/{farmID}/turbines', [FarmController::class, 'getTurbines']);
    Route::get('/{farmID}/turbines/{turbineID}', [FarmController::class, 'getTurbine']);
});

// Turbine api requests
Route::group(['prefix' => 'turbines'], function() {
    route::apiResource('', TurbineController::class);
    Route::get('/{turbineID}/components', TurbineController::class, 'getComponents');
    Route::get('/{turbineID}/components/{componentID}', TurbineController::class, 'getComponent');
    Route::get('/{turbineID}/inspections', TurbineController::class, 'getInspections');
    Route::get('/{turbineID}/inspections/{inspectionID}', TurbineController::class, 'getInspection');
});