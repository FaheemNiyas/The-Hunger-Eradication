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

Auth::routes();

Route::get('/', function () {
    return redirect('home');
});

Route::get('create-user', function () {
    return view('create_register');
})->name('create.user');

Route::get('delete-user', function () {
    return view('delete_user');
})->name('delete.user');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/store-post', [App\Http\Controllers\PostController::class, 'store'])->name('store.post');

Route::get('details-post', [App\Http\Controllers\PostController::class, 'post'])->name('details.post');
Route::post('delete', [App\Http\Controllers\PostController::class, 'delete'])->name('delete');

#Commence Controller
Route::post('/store-commence', [App\Http\Controllers\CommenceController::class, 'store'])->name('store.commence');

Route::post('suggestion', [\App\Http\Controllers\SuggestionController::class, 'update'])->name('suggestion.box');

#User Controller
Route::get('edit-user', [\App\Http\Controllers\UserController::class, 'edit'])->name('edit.user');
Route::post('store-user', [\App\Http\Controllers\UserController::class, 'store'])->name('store.user');

#News Update
Route::get('news-update', [\App\Http\Controllers\NewsController::class, 'index'])->name('news');
Route::post('news-store', [\App\Http\Controllers\NewsController::class, 'store'])->name('news.store');
