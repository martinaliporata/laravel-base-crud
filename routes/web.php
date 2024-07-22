<?php

use App\Http\Controllers\Admin\AnimalController;
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

Route::get('/animals', [AnimalController::class, 'index']) ->name('admin.animals.index');
Route::get('/animals/{id}', [AnimalController::class, 'show']) ->name('admin.animals.show');
