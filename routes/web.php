<?php

use App\Http\Controllers\NeighborhoodController;
use App\Http\Controllers\NeighborhoodCotroller;
use App\Http\Livewire\Neighborhoods;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/neighborhoods',[NeighborhoodController::class, 'index'])->name('neighborhoods.index');
Route::get('/neighborhoods/create',[NeighborhoodController::class, 'create'])->name('neighborhoods.create');
Route::post('/neighborhoods/store',[NeighborhoodController::class, 'store'])->name('neighborhoods.store');
Route::get('/neighborhoods/edit/{neighborhood}',[NeighborhoodController::class, 'edit'])->name('neighborhoods.edit');
Route::put('/neighborhoods/update/{neighborhood}',[NeighborhoodController::class, 'update'])->name('neighborhoods.update');
Route::get('/neighborhoods/{id}',[NeighborhoodController::class, 'show'])->name('neighborhoods.show');

//Route::get('/admin/items',[ItemController::class,'index'])->name('admin.items');