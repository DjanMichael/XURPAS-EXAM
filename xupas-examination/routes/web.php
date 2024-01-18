<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\pages\SolutionController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Main Page Route
Route::get('/', [HomePage::class, 'index'])->name('pages-home');

//pages
Route::get('/problem-php-1',[SolutionController::class,'goToPhpProblemPage'])->name('problem-php-1');
Route::get('/problem-sql-1',[SolutionController::class,'goToSqlProblemPage'])->name('problem-sql-1');

// logic routes
Route::post('/problem-php-1/answer',[SolutionController::class,'generateAnswerOne'])->name('problem-php-1');
Route::post('/problem-php-2/answer',[SolutionController::class,'generateAnswerTwo'])->name('problem-php-2');



// Route::get('/problem-sql-1',[])
