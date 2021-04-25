<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\MoodleController::class, 'users'])->name('users');
Route::get('/courses', [App\Http\Controllers\MoodleController::class, 'courses'])->name('courses');
Route::get('/grades/{id}', [App\Http\Controllers\MoodleController::class, 'users_grades'])->name('users_grades');
