<?php

use App\Http\Controllers\UserController;
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
    Route::get('/', [UserController::class, 'retrieveUsers'])->name('users');
    Route::get('/add', [UserController::class, 'dashboardCreateUser']);
    Route::get('/sign-up', [UserController::class, 'signUp'])->name('sign-up');
    Route::post('/add', [UserController::class, 'addUser'])->name('add-user');
    Route::get('/update/{uuid}', [UserController::class, 'retrieveUser'])->name('update-user');
    Route::put('/update/{uuid}', [UserController::class, 'updateUser']);
});