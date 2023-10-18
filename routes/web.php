<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportExportController;
use App\Http\Controllers\WaController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/wa', [WaController::class, 'index']);

Route::controller(ImportExportController::class)->group(function(){
    Route::get('import_export', 'importExport');
    Route::post('import', 'import')->name('import');
    Route::get('export', 'export')->name('export');
});
