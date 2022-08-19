<?php

use App\Http\Controllers\NoteController;
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
    return view('welcome');
});

//show php version
Route::get('/php', function () {
    return view('php');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Route::get('/notes', );
//
//{note} will be the unique id
//Route::get('/notes/{note}',);
//
//Route::get('/notes/create',);
//
//Route::post('/notes',);

Route::resource('notes', \App\Http\Controllers\NoteController::class)->middleware('auth');

//edit
//update
//destroy

require __DIR__.'/auth.php';
