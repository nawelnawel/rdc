<?php

use App\Http\Livewire\Categories;
use App\Http\Livewire\Lots;
use App\Http\Livewire\Marques;
use App\Http\Livewire\Materiels;
use App\Http\Livewire\Personnels;
use App\Http\Livewire\Structures;
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
    return view('welcome');
});


Route::get('/categories',Categories::class)->name("categories.index");

Route::get('/marques',Marques::class)->name("marques.index");

Route::get('/lots',Lots::class)->name("lots.index");

Route::get('/materiels',Materiels::class)->name("materiels.index");

Route::get('/structures',Structures::class)->name("structures.index");

Route::get('/personnels',Personnels::class)->name("personnels.index");