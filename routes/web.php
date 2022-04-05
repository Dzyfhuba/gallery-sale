<?php

use App\Http\Controllers\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\Admin\ContactUsController as AdminContactUsController;
use App\Http\Controllers\Admin\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\GalleryController;
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

Route::controller(ArticleController::class)->name('article.')->prefix('article')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/{title}', 'show')->name('show');
});

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');

Route::get('/contactus', [ContactUsController::class, 'index'])->name('contactus.index');

Route::middleware(['auth', 'role:admin'])->name('admin.')->prefix('admin')->group(function () {
    Route::get('/', function () {
        return redirect()->route('admin.article.index');
    })->name('dashboard');

    Route::resource('article', AdminArticleController::class);
    Route::get('article/status/{id}/{status}', [AdminArticleController::class, 'toggleStatus']);

    Route::resource('gallery', AdminGalleryController::class);

    Route::resource('contactus', AdminContactUsController::class);

    Route::resource('service', AdminServiceController::class);
    Route::get('service/status/{id}/{status}', [AdminServiceController::class, 'toggleStatus']);
});
