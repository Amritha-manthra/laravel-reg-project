<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\RegentriesController;

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

Route::get('/about', function () {
    return view('about');
});
Route::get('/', function () {
    return view('reg');
});
Route::get('/admin', [RegentriesController::class, 'admin']);

Route::get('/details/{id}', [RegentriesController::class, 'details']);

Route::post('/createentry',[RegentriesController::class, 'createentries']);

Route::get('/delete/{id}',[RegentriesController::class, 'delete']);