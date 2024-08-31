<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VocabularyController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', [VocabularyController::class, 'index'])->name('vocabulary.index');
Route::get('/vocabulary/create', [VocabularyController::class, 'create'])->name('vocabulary.create');
Route::post('/vocabulary', [VocabularyController::class, 'store'])->name('vocabulary.store');
Route::get('/vocabulary/{id}', [VocabularyController::class, 'show'])->name('vocabulary.show');

