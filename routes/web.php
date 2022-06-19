<?php

use App\Http\Controllers\MailController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', function(){return redirect('/');});
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->name('about');
Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact');
Route::get('/users', [App\Http\Controllers\UserController::class, 'index'])->name('users');
Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout-user');
Route::post('/sendEmail', [App\Http\Controllers\MailController::class, 'sendEmail'])->name('sendEmail');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/blog', [App\Http\Controllers\ProfileController::class, 'blog'])->name('blog');

Route::group([/*'prefix' => 'admin',*/  'middleware' => 'auth'], function()
{
    Route::get('post/create', [App\Http\Controllers\PostController::class, 'create'])->name('post-create');
    Route::post('post', [App\Http\Controllers\PostController::class, 'store'])->name('store');
    Route::get('post/{id}/edit', [App\Http\Controllers\PostController::class, 'edit'])->name('post-edit');
    Route::patch('post/{id}', [App\Http\Controllers\PostController::class, 'update'])->name('post-update');
    Route::delete('post/{id}', [App\Http\Controllers\PostController::class, 'destroy'])->name('post-destroy');
});


