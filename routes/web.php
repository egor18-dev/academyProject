<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\LegalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;

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
    return view('main');
});

Route::get('/dashboard', function () {
    return redirect()->to('/users');
});

Route::group(['prefix' => 'users'], function () {
    Route::get('/', [UserController::class, 'index'])->name('users.index')->middleware('admin_or_editor');
    Route::get('/sign-up', [UserController::class, 'create'])->name('users.create')->middleware('admin_or_editor');
    Route::get('/add', [UserController::class, 'showCreateForm'])->name('users.showCreateForm');
    Route::get('/enter', [UserController::class, 'showEnterForm'])->name('users.showEnterForm');
    Route::post('/', [UserController::class, 'store'])->name('users.store');
    Route::post('/enter', [UserController::class, 'enter'])->name('users.enter');
    Route::get('/{uuid}', [UserController::class, 'show'])->name('users.show')->middleware('admin_or_editor');
    Route::put('/{uuid}', [UserController::class, 'update'])->name('users.update')->middleware('auth');
    Route::delete('/{uuid}', [UserController::class, 'delete'])->name('users.delete')->middleware('admin_or_editor');
});

Route::group(['prefix' => 'profile'], function () {
    Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/{uuid}', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/image/{uuid}', [ProfileController::class, 'serveImage'])->name('profile.image');
    Route::put('/{uuid}', [UserController::class, 'update'])->name('profile.update');
});

Route::group(['prefix' => 'levels'], function () {
    Route::get('/', [LevelController::class, 'index'])->name('levels.index')->middleware('admin_or_editor');
    Route::get('/create', [LevelController::class, 'create'])->name('levels.create')->middleware('admin_or_editor');
    Route::post('/', [LevelController::class, 'store'])->name('levels.store')->middleware('admin_or_editor');
    Route::get('/{uuid}', [LevelController::class, 'show'])->name('levels.show')->middleware('admin_or_editor');
    Route::put('/{uuid}', [LevelController::class, 'update'])->name('levels.update')->middleware('admin_or_editor');
    Route::delete('/{uuid}', [LevelController::class, 'delete'])->name('levels.delete')->middleware('admin_or_editor');
});

Route::group(['prefix' => 'classes'], function () {
    Route::get('/', [ClassController::class, 'index'])->name('classes.index')->middleware('admin_or_editor');
    Route::get('/videos', [ClassController::class, 'videos'])->name('userClasses.videos')->middleware('auth');
    Route::get('/video/{uuid}', [ClassController::class, 'serveImage'])->name('userClasses.image')->middleware('auth');
    Route::get('/view/{uuid}', [ClassController::class, 'view'])->name('userClasses.view')->middleware('auth');
    Route::get('/{id}/stream', [ClassController::class, 'streamVideo'])->name('classes.stream')->middleware('auth');
    Route::get('/create', [ClassController::class, 'create'])->name('classes.create')->middleware('admin_or_editor');
    Route::post('/', [ClassController::class, 'store'])->name('classes.store')->middleware('admin_or_editor');
    Route::get('/{uuid}', [ClassController::class, 'show'])->name('classes.show')->middleware('admin_or_editor');
    Route::put('/{uuid}', [ClassController::class, 'update'])->name('classes.update')->middleware('admin_or_editor');
    Route::delete('/{uuid}', [ClassController::class, 'delete'])->name('classes.delete')->middleware('admin_or_editor');
    Route::post('/mark-video-watched/{userUuid}/{classUuid}', [ClassController::class, 'markVideoAsWatched'])
        ->name('classes.mark')->middleware('auth');
});

Route::group(['prefix' => 'exams'], function () {
    Route::get('/', [ExamController::class, 'index'])->name('exams.index')->middleware('admin_or_editor');
    Route::get('/create', [ExamController::class, 'create'])->name('exams.create')->middleware('admin_or_editor');
    Route::post('/', [ExamController::class, 'store'])->name('exams.store')->middleware('admin_or_editor');
    Route::get('/{uuid}', [ExamController::class, 'show'])->name('exams.show')->middleware('admin_or_editor');
    Route::put('/{uuid}', [ExamController::class, 'update'])->name('exams.update')->middleware('admin_or_editor');
    Route::delete('/{uuid}', [ExamController::class, 'delete'])->name('exams.delete')->middleware('admin_or_editor');
    Route::get('/{uuid}/showExam', [ExamController::class, 'showExam'])->name('exams.showExam');
});

Route::group(['prefix' => 'exams/{examUuid}/questions'], function () {
    Route::get('/', [QuestionController::class, 'index'])->name('questions.index')->middleware('admin_or_editor');
    Route::get('/create', [QuestionController::class, 'create'])->name('questions.create')->middleware('admin_or_editor');
    Route::post('/', [QuestionController::class, 'store'])->name('questions.store')->middleware('admin_or_editor');
    Route::get('/{questionUuid}', [QuestionController::class, 'show'])->name('questions.show')->middleware('admin_or_editor');
    Route::put('/{questionUuid}', [QuestionController::class, 'update'])->name('questions.update')->middleware('admin_or_editor');
    Route::delete('/{questionUuid}', [QuestionController::class, 'delete'])->name('questions.delete')->middleware('admin_or_editor');
});

Route::group(['prefix' => 'comments'], function () {
    Route::post('/', [CommentController::class, 'store'])->name('comments.store')->middleware('auth');
});

Route::group(['prefix' => 'chats'], function () {
    Route::get('/', [ChatController::class, 'index'])->name('chats.index')->middleware('auth');
    Route::get('/create', [ChatController::class, 'create'])->name('chats.create')->middleware('auth');
    Route::get('/{uuid}', [ChatController::class, 'show'])->name('chats.show')->middleware('auth');
    Route::post('/', [ChatController::class, 'store'])->name('chats.store')->middleware('auth');
    Route::put('/{uuid}', [ChatController::class, 'update'])->name('chats.update')->middleware('auth');
    Route::delete('/{uuid}', [ChatController::class, 'delete'])->name('chats.delete')->middleware('auth');
});

Route::get('/terms', [LegalController::class, 'terms'])->name('terms')->middleware('auth');
Route::get('/privacy', [LegalController::class, 'privacy'])->name('privacy')->middleware('auth');
Route::get('/legal', [LegalController::class, 'legal'])->name('legal')->middleware('auth');
