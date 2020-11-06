<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/plantilla', [
    'uses' => 'Creador@plantilla',
    'as' => 'plantilla'
]);

Route::get('/vincent', [
    'uses' => 'Creador@vincent',
    'as' => 'vincent'
]);

Route::get('/claude', [
    'uses' => 'Creador@claude',
    'as' => 'claude'
]);

Route::get('/pablo', [
    'uses' => 'Creador@pablo',
    'as' => 'pablo'
]);

Route::get('/salvador', [
    'uses' => 'Creador@salvador',
    'as' => 'salvador'
]);

Route::get('/leonardo', [
    'uses' => 'Creador@leonardo',
    'as' => 'leonardo'
]);
