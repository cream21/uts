<?php

use App\Http\Controllers\UtsController;

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
Route::view('template', 'template/master-mid');
// tugas web 3 web route :
Route::get('mid/index', [UtsController::class, 'index']);
Route::get('add', [UtsController::class, 'create']);
Route::post('save-mid', [UtsController::class, 'ambilData'])->name('mid.save-mid');
Route::delete('delete-mid/{id}', [UtsController::class, 'destroy'])->name('delete.mid');
Route::get('edit-mid/{id}/edit', [UtsController::class, 'edit'])->name('edit.mid');
Route::put('edit-mid/{id}', [utsController::class, 'update'])->name('update.mid');
