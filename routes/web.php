<?php

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
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
    Route::get('/profile/create', [App\Http\Controllers\ProfileController::class, 'create'])->name('profile.create');
    Route::post('/profile/store', [App\Http\Controllers\ProfileController::class, 'store'])->name('profile.store');
    Route::get('/profile/{id}/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/update/{id}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile/delete/{id}', [App\Http\Controllers\ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/skill', [App\Http\Controllers\SkillController::class, 'index'])->name('skill');
    Route::get('/skill/create', [App\Http\Controllers\SkillController::class, 'create'])->name('skill.create');
    Route::post('/skill/store', [App\Http\Controllers\SkillController::class, 'store'])->name('skill.store');
    Route::get('/skill/{id}/edit', [App\Http\Controllers\SkillController::class, 'edit'])->name('skill.edit');
    Route::put('/skill/update/{id}', [App\Http\Controllers\SkillController::class, 'update'])->name('skill.update');
    Route::delete('/skill/delete/{id}', [App\Http\Controllers\SkillController::class, 'destroy'])->name('skill.destroy');

    Route::get('/exper', [App\Http\Controllers\ExperController::class, 'index'])->name('exper');
    Route::get('/exper/create', [App\Http\Controllers\ExperController::class, 'create'])->name('exper.create');
    Route::post('/exper/store', [App\Http\Controllers\ExperController::class, 'store'])->name('exper.store');
    Route::get('/exper/{id}/edit', [App\Http\Controllers\ExperController::class, 'edit'])->name('exper.edit');
    Route::put('/exper/update/{id}', [App\Http\Controllers\ExperController::class, 'update'])->name('exper.update');
    Route::delete('/exper/delete/{id}', [App\Http\Controllers\ExperController::class, 'destroy'])->name('exper.destroy');
});

Auth::routes();
