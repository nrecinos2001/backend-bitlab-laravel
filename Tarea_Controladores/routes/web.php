<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\ResultsController;

Route::get('/', [WelcomeController::class, 'welcomePage']);
Route::get('controllersHW', [WelcomeController::class, 'controllersHW']);
Route::get('queryBuilder', [QueryController::class, 'exerciseOne']);

//Rutas para formularios
Route::prefix('ejercicio')->group(function(){
    Route::get('1', [FormsController::class, 'exerciseOne']);
    Route::get('2', [FormsController::class, 'exerciseTwo']);
    Route::get('3', [FormsController::class, 'exerciseThree']);
    Route::get('4', [FormsController::class, 'exerciseFour']);
    Route::get('5', [FormsController::class, 'exerciseFive']);
    Route::get('6', [FormsController::class, 'exerciseSix']);
    Route::get('7', [FormsController::class, 'exerciseSeven']);
    Route::get('8', [FormsController::class, 'exerciseEight']);
});

//Rutas para resultados
Route::prefix('result')->group(function(){
    Route::post('One', [ResultsController::class, 'resultOneView']);
    Route::post('Two', [ResultsController::class, 'resultTwoView']);
    Route::post('Three', [ResultsController::class, 'resultThreeView']);
    Route::post('Four', [ResultsController::class, 'resultFourView']);
    Route::post('Five', [ResultsController::class, 'resultFiveView']);
    Route::post('Six', [ResultsController::class, 'resultSixView']);
    Route::post('Seven', [ResultsController::class, 'resultSevenView']);
    Route::post('Eight', [ResultsController::class, 'resultEightView']); 
});
