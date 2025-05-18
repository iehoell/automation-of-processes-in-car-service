<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\StorageController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DealsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signupformaintenance', function () {
    return view('signUpForMaintenance');
});

Route::get('/profile', function () {
    return view('userProfile');
});

Route::get('/AoPiCS', function () {
    return view('AoPiCS');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/login', function () {
    return view('login');
});

//Registration & Login
Route::post('/registration/add', [RegistrationController::class, 'store'])->name('store');
Route::post('/login/login', [LoginController::class, 'login'])->name('login');
//Clients
Route::get('/AoPiCS/clients', [ClientController::class, 'showAll'])->name('clients.showAll');
Route::get('/AoPiCS/clients/addNewClient', [ClientController::class, 'addNewClient'])->name('clients.addNewClient');
Route::post('/AoPiCS/clients/add', [ClientController::class, 'store'])->name('clients.store');
Route::get('/AoPiCS/clients/{client}/deleteEntry', [ClientController::class, 'deleteEntry'])->name('client.deleteEntry');
Route::get('/AoPiCS/clients/{client}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::post('/AoPiCS/clients/{client}/editEntry', [ClientController::class, 'editEntry'])->name('clients.editEntry');
Route::get('/AoPiCS/clients/search', [ClientController::class, 'search'])->name('clients.search');

//Storage
Route::get('/AoPiCS/storage', [StorageController::class, 'showAll'])->name('storage.showAll');
Route::get('/AoPiCS/storage/addNewDelivery', [StorageController::class, 'addNewDelivery'])->name('storage.addNewDelivery');
Route::post('/AoPiCS/storage/add', [StorageController::class, 'store'])->name('storage.store');
Route::get('/AoPiCS/storage/{delivery}/deleteEntry', [StorageController::class, 'deleteEntry'])->name('storage.deleteEntry');
Route::get('/AoPiCS/storage/{delivery}/edit', [StorageController::class, 'edit'])->name('storage.edit');
Route::post('/AoPiCS/storage/{delivery}/editEntry', [StorageController::class, 'editEntry'])->name('storage.editEntry');
Route::get('/AoPiCS/storage/search', [StorageController::class, 'search'])->name('storage.search');

//Tasks
Route::get('/AoPiCS/tasks', [TasksController::class, 'showAll'])->name('tasks.showAll');
Route::get('/AoPiCS/tasks/addNewTask', [TasksController::class, 'addNewTask'])->name('tasks.addNewTask');
Route::post('/AoPiCS/tasks/add', [TasksController::class, 'store'])->name('tasks.store');
Route::get('/AoPiCS/tasks/{task}/deleteEntry', [TasksController::class, 'deleteEntry'])->name('tasks.deleteEntry');
Route::get('/AoPiCS/tasks/{task}/edit', [TasksController::class, 'edit'])->name('tasks.edit');
Route::post('/AoPiCS/tasks/{task}/editEntry', [TasksController::class, 'editEntry'])->name('tasks.editEntry');
Route::get('/AoPiCS/tasks/search', [TasksController::class, 'search'])->name('tasks.search');
//Deals
Route::get('/AoPiCS/dealsList/addNewDeal', [DealsController::class, 'addNewDeal'])->name('deals.addNewDeal');
Route::post('/AoPiCS/dealsList/add', [DealsController::class, 'store'])->name('deals.store');
Route::get('/AoPiCS/dealsList/search', [DealsController::class, 'search'])->name('deals.search');
Route::get('/AoPiCS/dealsList', [DealsController::class, 'showDealsList'])->name('deals.showDealsList');
Route::get('/AoPiCS/dealsList/{deal}', [DealsController::class, 'showDeal'])->name('deals.showDeal');
Route::post('/signupformaintenance/add', [DealsController::class, 'createDealByClient'])->name('deals.createDealByClient');
Route::get('/AoPiCS/dealsList/{deal}/deleteEntry', [DealsController::class, 'deleteEntry'])->name('deals.deleteEntry');
