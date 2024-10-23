<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route('users.enter');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return redirect()->to('/users');
});

Route::group(['prefix' => 'users'], function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index');
    Route::get('/sign-up', [UserController::class, 'create'])->name('users.create');
    Route::get('/add', [UserController::class, 'showCreateForm'])->name('users.showCreateForm');
    Route::get('/enter', [UserController::class, 'showEnterForm'])->name('users.showEnterForm');
    Route::post('/', [UserController::class, 'store'])->name('users.store');
    Route::post('/enter', [UserController::class, 'enter'])->name('users.enter');
    Route::get('/{uuid}', [UserController::class, 'show'])->name('users.show');
    Route::put('/{uuid}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/{uuid}', [UserController::class, 'delete'])->name('users.delete');
});

Route::group(['prefix' => 'profile'], function () {
    Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/{uuid}', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/image/{uuid}', [ProfileController::class, 'serveImage'])->name('profile.image');
    Route::put('/{uuid}', [UserController::class, 'update'])->name('profile.update');
});

Route::group(['prefix' => 'levels'], function () {
    Route::get('/', [LevelController::class, 'index'])->name('levels.index');
    Route::get('/create', [LevelController::class, 'create'])->name('levels.create');
    Route::post('/', [LevelController::class, 'store'])->name('levels.store');
    Route::get('/{uuid}', [LevelController::class, 'show'])->name('levels.show');
    Route::put('/{uuid}', [LevelController::class, 'update'])->name('levels.update');
    Route::delete('/{uuid}', [LevelController::class, 'delete'])->name('levels.delete');
});

Route::group(['prefix' => 'classes'], function () {
    Route::get('/', [ClassController::class, 'index'])->name('classes.index');
    Route::get('/videos', [ClassController::class, 'videos'])->name('userClasses.videos');
    Route::get('/view/{uuid}', [ClassController::class, 'view'])->name('classes.view');
    Route::get('/{id}/stream', [ClassController::class, 'streamVideo'])->name('classes.stream');
    Route::get('/create', [ClassController::class, 'create'])->name('classes.create');
    Route::post('/', [ClassController::class, 'store'])->name('classes.store');
    Route::get('/{uuid}', [ClassController::class, 'show'])->name('classes.show');
    Route::put('/{uuid}', [ClassController::class, 'update'])->name('classes.update');
    Route::delete('/{uuid}', [ClassController::class, 'delete'])->name('classes.delete');
});

Route::group(['prefix' => 'home'], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home.index');
});
