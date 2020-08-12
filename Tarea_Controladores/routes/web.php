<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\ResultsController;

Route::get('/', [WelcomeController::class, 'welcomePage']);
Route::get('controllersHW', [WelcomeController::class, 'controllersHW']);
Route::get('queryBuilder', [QueryController::class, 'menu']);

//Rutas para ejercicios de Query Builder
Route::prefix('ex')->group(function(){
    Route::get('1', [QueryController::class, 'exerciseOne']);
    Route::get('2', [QueryController::class, 'exerciseTwo']);
    Route::get('3', [QueryController::class, 'exerciseThree']);
    Route::get('4', [QueryController::class, 'exerciseFour']);
    Route::get('5', [QueryController::class, 'exerciseFive']);
    Route::get('6', [QueryController::class, 'exerciseSix']);
    Route::get('7', [QueryController::class, 'exerciseSeven']);
    Route::get('8', [QueryController::class, 'exerciseEight']);
    Route::get('9', [QueryController::class, 'exerciseNine']);
    Route::get('10', [QueryController::class, 'exerciseTen']);
    Route::get('11', [QueryController::class, 'exerciseEleven']);
    Route::get('12', [QueryController::class, 'exerciseTwelve']);
    Route::get('13', [QueryController::class, 'exerciseThirtheen']);
    Route::get('14', [QueryController::class, 'exerciseFourteen']);
    Route::get('15', [QueryController::class, 'exerciseFifteen']);
    Route::get('16', [QueryController::class, 'exerciseSixteen']);
    Route::get('17', [QueryController::class, 'exerciseSeventeen']);
    Route::get('18', [QueryController::class, 'exerciseEighteen']);
    Route::get('19', [QueryController::class, 'exerciseNineteen']);
    Route::get('20', [QueryController::class, 'exerciseTwenty']);
    Route::get('21', [QueryController::class, 'exerciseTOne']);
    Route::get('22', [QueryController::class, 'exerciseTTwo']);
    Route::get('23', [QueryController::class, 'exerciseTThree']);
    Route::get('24', [QueryController::class, 'exerciseTFour']);
    Route::get('25', [QueryController::class, 'exerciseTFive']);
    
});



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
