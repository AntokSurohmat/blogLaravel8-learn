<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\BlogController;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');

Route::get('/',[BlogController::class, 'index'])->name('blog_posts');
Route::get('/{slug}', [BlogController::class, 'show'])->name('blog_post');
Route::get('/user/{userId}', [BlogController::class, 'user'])->name('blog_user_posts');
Route::get('/category/{slug}', [BlogController::class, 'category'])->name('blog_category_posts');
Route::get('/tag/{slug}', [BlogController::class, 'tag'])->name('blog_tag_posts');