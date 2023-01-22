<?php

use App\Http\Controllers\ComponentController;
use App\Http\Controllers\FarmController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\InspectionController;
use App\Http\Controllers\TurbineController;
use App\Models\ComponentType;
use App\Models\GradeType;
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
    Route::apiResource('', TurbineController::class);
    Route::get('/{turbineID}/components', TurbineController::class, 'getComponents');
    Route::get('/{turbineID}/components/{componentID}', TurbineController::class, 'getComponent');
    Route::get('/{turbineID}/inspections', TurbineController::class, 'getInspections');
    Route::get('/{turbineID}/inspections/{inspectionID}', TurbineController::class, 'getInspection');
});

// Component api requests
Route::group(['prefix' => 'components'], function() {
    Route::apiResource('', ComponentController::class);
    Route::get('/{componentID}/grades', ComponentController::class, 'getGrades');
    Route::get('/{componentID}/grades/{gradeID}', ComponentController::class, 'getGrade');
});

// Inspection api requests
Route::group(['prefix' => 'inspections'], function() {
    Route::apiResource('', InspectionController::class);
    Route::get('/{inspectionID}/grades', InspectionController::class, 'getGrades');
    Route::get('/{inspectionID}/grades/{gradeID}', InspectionController::class, 'getGrade');
});

// Grade api requests
Route::group(['prefix' => 'grades'], function() {
    Route::apiResource('', GradeController::class);
});

// ComponentType api requests
Route::group(['prefix' => 'component-types'], function() {
    Route::apiResource('', ComponentType::class);
});

// GradeType api requests
Route::group(['prefix' => 'grade-types'], function() {
    Route::apiResource('', GradeType::class);
});