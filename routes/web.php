<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\PostController;
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

//Route::get('/', function () {
//    return view('home');
//});

Route::get('/', function () {
    return view('welcome');
});
// OLD ->
// Route::post('/subscribe', 'SubscriberController@store')->name('subscribe');
// NEW ->
Route::post('/subscribe', [SubscriberController::class, 'store'])->name('subscribe');
Route::get('/subscribe', function () {
    return view('subscribe');
})->name('subscribe.form');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dash-v1', function () {
    return view('dash-v1');
})->middleware(['auth', 'verified'])->name('dash-v1');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

        // Add the following route to the existing routes because we want the posts route accessible to authenticated users only.
    // We'll use a resource route because it contains all the exact routes we need for a typical CRUD application.
    Route::resource('posts', PostController::class);
});



require __DIR__.'/auth.php';
