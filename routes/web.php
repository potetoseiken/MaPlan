<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PlanController;
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

//LaravelのデフォルトWelcomeページ表示
Route::get('/', function () {
    return view('welcome');
});



//「navigation関連」
//マイページ表示
Route::get('/mypage', function () {
    return view('mypage');
})->middleware(['auth', 'verified'])->name('mypage');

//プラン作成画面表示
Route::get('/plan/create', [PlanController::class, 'show']
)->middleware(['auth', 'verified'])->name('create_plan');

//スポットリスト作成画面表示
Route::get('/spotlist/create', function () {
    return view('spotlists/create');
})->middleware(['auth', 'verified'])->name('create_spotlist');



//ユーザー認証関連ルーティング
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//プラン作成1ページ目の入力完了
Route::post('/plans', [PlanController::class, 'store1'])
->name('store1');

require __DIR__.'/auth.php';
