<?php

use App\Http\Controllers\nameandidcontroller; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeerController; 


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

Route::get('/beer', [BeerController::class, 'showBeer']);
Route::get('/beers', [BeerController::class, 'beers']);
Route::get('/all', [BeerController::class, 'allBeers']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/upload', [BeerController::class, 'upload']);
Route::get('/nameandid', [nameandidcontroller::class, 'nameandidform']);
//Route::view('/nameandid', '/beer/nameandid');
Route::post('/insertname', [nameandidcontroller::class, 'insertname']);
