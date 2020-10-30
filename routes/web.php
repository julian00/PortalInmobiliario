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

Route::get('/neighborhoods/show',[NeighborhoodController::class, 'show']);
Route::get('/neighborhoods/add',[NeighborhoodController::class, 'add']);

//Route::get('/admin/items',[ItemController::class,'index'])->name('admin.items');