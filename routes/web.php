<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportExcelController;

use App\Http\Controllers\BandsController;
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

Route::get('/import-export', [ImportExcelController::class, 'fileImportExport'])->name('file-import');

Route::post('/excel-import', [ImportExcelController::class, 'importExcel'])->name('excel-import');

Route::get('/page',function(){
    return view('page');
});

Route::get('/bands',[BandsController::class, 'index'])->name('bands');
Route::get('/bands-man',[BandsController::class, 'index'])->name('bands.man');
Route::get('/bands-woman',[BandsController::class, 'index'])->name('bands.woman');