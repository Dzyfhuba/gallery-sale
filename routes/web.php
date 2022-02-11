<?php

use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use Illuminate\Support\Facades\Auth;
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

Route::get('article', [AdminArticleController::class, 'index']);


Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.article.index');
    })->name('dashboard');

    Route::resource('article', AdminArticleController::class);
    Route::get('article/status/{id}/{status}', [AdminArticleController::class, 'toggleStatus']);
});
