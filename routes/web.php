<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\LevelController;
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
    return redirect()->route('home');
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
    Route::post('/', [UserController::class, 'store'])->name('users.store');
    Route::get('/{uuid}', [UserController::class, 'show'])->name('users.show');
    Route::put('/{uuid}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/{uuid}', [UserController::class, 'delete'])->name('users.delete');
});

Route::group(['prefix' => 'levels'], function () {
    Route::get('/', [LevelController::class, 'index'])->name('levels.index');
    Route::get('/create', [LevelController::class, 'create'])->name('levels.create');
    Route::post('/', [LevelController::class, 'store'])->name('levels.store');
    Route::get('/{uuid}', [LevelController::class, 'show'])->name('levels.show');
    Route::put('/{uuid}', [LevelController::class, 'update'])->name('levels.update');
    Route::delete('/{uuid}', [LevelController::class, 'destroy'])->name('levels.delete');
});

Route::group(['prefix' => 'classes'], function(){
    Route::get('/', [ClassesController::class, 'retrieveClasses'])->name('classes');
    Route::get('/add', [ClassesController::class, 'dashboardCreateClass']);
    Route::post('/add', [ClassesController::class, 'addClass'])->name('add-class');
    Route::get('/update/{uuid}', [ClassesController::class, 'retrieveClass'])->name('update-class');
    Route::put('/update/{uuid}', [ClassesController::class, 'updateClass']);
});