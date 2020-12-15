<?php

use App\Http\Controllers\NeighborhoodController;
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
})->name('home');

/*Route::get('neighborhoods',[NeighborhoodController::class, 'index'])->name('neighborhoods.index');
Route::get('neighborhoods/create',[NeighborhoodController::class, 'create'])->name('neighborhoods.create');
Route::post('neighborhoods/store',[NeighborhoodController::class, 'store'])->name('neighborhoods.store');
Route::get('neighborhoods/{neighborhood}/edit',[NeighborhoodController::class, 'edit'])->name('neighborhoods.edit');
Route::put('neighborhoods/update/{neighborhood}',[NeighborhoodController::class, 'update'])->name('neighborhoods.update');
Route::delete('neighborhoods/{neighborhood}',[NeighborhoodController::class, 'destroy'])->name('neighborhoods.destroy');
Route::get('neighborhoods/{id}',[NeighborhoodController::class, 'show'])->name('neighborhoods.show');
*/

//uso resources cuando necesito usar las DDBB en una sola linea hace todo lo de arriba
Route::resource('neighborhoods', NeighborhoodController::class);

//solo para contenido estatico
            //URL,vista
Route::view('nosotros', 'nosotros')->name('nosotros');
//Route::get('/admin/items',[ItemController::class,'index'])->name('admin.items');