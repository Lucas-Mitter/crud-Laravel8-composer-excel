<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProposalController;

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

Route::get('/', function () {    return view('welcome');});

Route::prefix('/client')->group(function(){

    Route::get('/', [ClientController::class, 'index'])->name('client.index');

    Route::get('add', [ClientController::class, 'create']);
    Route::post('add', [ClientController::class, 'store']);

    Route::get('edit/{id}', [ClientController::class, 'edit']);
    Route::post('edit/{id}', [ClientController::class, 'update']);

    Route::get('destroy/{id}', [ClientController::class, 'destroy']);

});

Route::prefix('/proposal')->group(function(){

    Route::get('/', [ProposalController::class, 'index'])->name('proposal.index');

    Route::get('add', [ProposalController::class, 'create']);
    Route::post('add', [ProposalController::class, 'store']);
    Route::get('download/{file}', [ProposalController::class, 'download']);

    Route::get('edit/{id}', [ProposalController::class, 'edit']);
    Route::post('edit/{id}', [ProposalController::class, 'update']);

    Route::get('destroy/{id}', [ProposalController::class, 'destroy']);

    Route::get('export', [ProposalController::class, 'export']);

    Route::get('done/{id}', [ProposalController::class, 'done'])->name('proposal.done');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
