<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/AoPiCS/clients', function () {
    return view('../sections/clients');
});

Route::get('/AoPiCS/storage', function () {
    return view('../sections/storage');
});

Route::get('/AoPiCS/tasks', function () {
    return view('../sections/tasks');
});
