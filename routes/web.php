<?php

use App\Livewire\Admin\Flavor\EditFlavor;
use App\Livewire\Menu;
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
Route::redirect('/', '/cardapio');

Route::get('/cardapio', Menu::class);
Route::get('/sabores/{flavor}/editar', EditFlavor::class);
