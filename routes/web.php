<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CasalController;
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
Route::get('/casalView', [CasalController::class, "casalView"])->name('casalView');
Route::get('/casalsCreate', [CasalController::class, "casalsCreate"])->name('casalsCreate');
Route::post('/addCasal', [CasalController::class, "addCasal"])->name('addCasal');
Route::post('/edit/{casal}', [CasalController::class, "editCasal"])->name('edit_casal');
Route::post('/delete/{casal}', [CasalController::class, "formEdit"])->name('delete_casal');
