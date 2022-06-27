<?php

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


Auth::routes(); // Routes musia byt v poradí refer to *

Route::get('/email', function () {
    return new \App\Mail\NewUserWelcomeMail();
});

/// Routes for posts

//Axios
Route::post('follow/{user}', [\App\Http\Controllers\FollowsController::class, 'store']);

//Routes for Posts
Route::get('/p/create', [App\Http\Controllers\PostsController::class, 'create']); //* Ak by toto nebolo prve tak by to neslo lebo
Route::post('/p', [App\Http\Controllers\PostsController::class, 'store']);
Route::get('/p/{post}', [App\Http\Controllers\PostsController::class, 'show']); // * toto berie vsetko za /p cize by sa spustila a kod by dalej nepokracoval
//-------------------------------

///Routes for Homepage
// Pouzijeme PostsController a z neho index()
Route::get('/', [\App\Http\Controllers\PostsController::class, 'index']);
//-------------------------------

/// Routes for profiles
Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');
Route::get('/livesearch', [\App\Http\Controllers\ProfilesController::class, 'getProfiles']);
Route::get('/profiles', [App\Http\Controllers\ProfilesController::class, 'show']);
//-------------------------------
