<?php

use App\Http\Controllers\nameandidcontroller; 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeerController; 
use App\Http\Controllers\GoogleController;


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

Route::redirect('/', '/index');

Route::get('/index', [BeerController::class, 'index']);
Route::get('/beer', [BeerController::class, 'showBeer']);
Route::get('/beers', [BeerController::class, 'beers']);
Route::get('/all', [BeerController::class, 'allBeers']);
Route::get('/breweries', [BeerController::class, 'breweries']);
Route::get('/recipes', [BeerController::class, 'recipes']);
Route::get('/soap', [BeerController::class, 'soap']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/upload', [BeerController::class, 'upload']);
//Route::get('/nameandid', [nameandidcontroller::class, 'nameandidform']);
//Route::view('/nameandid', '/beer/nameandid');
Route::post('/insertname', [nameandidcontroller::class, 'insertname']);

// Google Login URL
Route::prefix('google')->name('google.')->group( function(){
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');
});

// Redirect home to index.
Route::get('/index', [BeerController::class, 'index'])->name('home');