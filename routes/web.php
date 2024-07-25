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

Route::get('/', [AnimalController::class, 'index']) ->name('home');
Route::get('/animals', [AnimalController::class, 'index']) ->name('admin.animals.index');
Route::post('/animals', [AnimalController::class, 'store'])->name('animals.store');
Route::get('/animals/create', [AnimalController::class, 'create'])->name('animals.create');
Route::get('/animals/{id}', [AnimalController::class, 'show']) ->name('admin.animals.show');
Route::get('/animals/{id}/edit', [AnimalController::class, 'edit']) ->name('admin.animals.edit');
Route::put('/animals/{id}', [AnimalController::class, 'update']) ->name('admin.animals.update');
Route::delete('/animals/{id}', [AnimalController::class, 'destroy']) ->name('admin.animals.destroy');

// posso anche scriverle così
// Route::resource('/animals'. AnimalController::class);
