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

Route::get('/bands/show',[BandsController::class, 'index'])->name('bands.show');

Route::get('/page',function(){
    return view('page');
});
