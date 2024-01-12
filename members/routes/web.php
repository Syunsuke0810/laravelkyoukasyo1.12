<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RoleController;

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
    return view('welcome');
})->name('top');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/// 管理者用画面
Route::middleware(['can:admin'])->group(function () {
    Route::get('profile/index', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile/adedit/{user}', [ProfileController::class, 'adedit'])->name('profile.adedit');
    Route::patch('/profile/adupdate/{user}', [ProfileController::class, 'adupdate'])->name('profile.adupdate');
    // 追加
    Route::patch('roles/{user}/attach', [RoleController::class, 'attach'])->name('role.attach');
    Route::patch('roles/{user}/detach', [RoleController::class, 'detach'])->name('role.detach');
});

Route::middleware('auth')->group(function () {
    // この下の行だけ違う。そして下記の行を入れると誰でもユーザー一覧を見れてしまう
    // Route::get('/profile/index', [ProfileController::class, 'index'])->name('profile.index');
    // この上の行だけ違う。教材では「Route::get('/profile', [Prof・・・」でindexはない
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('post/mypost', [PostController::class, 'mypost'])->name('post.mypost');
Route::get('post/mycomment', [PostController::class, 'mycomment'])->name('post.mycomment');

Route::resource('post', PostController::class);

Route::post('post/comment/store', [CommentController::class, 'store'])->name('comment.store');

Route::get('contact/create',[ContactController::class,'create'])->name('contact,create');
Route::post('contact/store', [ContactController::class, 'store'])->name('contact.store');

require __DIR__.'/auth.php';
