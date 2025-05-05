<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\TasksController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/AoPiCS', function () {
    return view('AoPiCS');
});

Route::get('/AoPiCS/dealsList', function () {
    return view('../sections/dealsList');
});

Route::get('/AoPiCS/dealsList/deals', function () {
    return view('../sections/deals');
});

//Route::get('/AoPiCS/clients', function () {
//    return view('../sections/clients');
//});

//Route::get('/AoPiCS/storage', function () {
//    return view('../sections/storage');
//});

//Route::get('/AoPiCS/tasks', function () {
//    return view('../sections/tasks');
//});

//Clients
Route::get('/AoPiCS/clients', [ClientController::class, 'showAll'])->name('clients.showAll');
Route::get('/AoPiCS/clients/addNewClient', [ClientController::class, 'addNewClient'])->name('clients.addNewClient');
Route::post('/AoPiCS/clients/add', [ClientController::class, 'store'])->name('clients.store');
//Route::get('show/predmet/{predmet}/delete', [PredmetController::class, 'delete'])->name('predmet.delete');
Route::get('/AoPiCS/clients/{client}/deleteEntry', [ClientController::class, 'deleteEntry'])->name('client.deleteEntry');
Route::get('/AoPiCS/clients/{client}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::post('/AoPiCS/clients/{client}/editEntry', [ClientController::class, 'editEntry'])->name('clients.editEntry');

//Storage
Route::get('/AoPiCS/storage', [StorageController::class, 'showAll'])->name('storage.showAll');
//Tasks
Route::get('/AoPiCS/tasks', [TasksController::class, 'showAll'])->name('tasks.showAll');
