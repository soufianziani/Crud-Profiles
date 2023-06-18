<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilesController;


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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/user', function () {
//     return view( ' user', );
// });

Route::resource('p', ProfilesController::class);
Route::delete('p', [ProfilesController::class, 'deleteAll'])->name('p.deleteAll');

Route::fallback( function () {
    return view('error');
});
    