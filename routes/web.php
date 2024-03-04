<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IncidenciesController;
use Illuminate\Support\Facades\Route;

//RUTAS DE INCIDENCIES
Route::get('admin/incidencies/crear', 'App\Http\Controllers\IncidenciesController@crear')->name('admin/incidencies/crear');
Route::put('admin/incidencies/store', 'App\Http\Controllers\IncidenciesController@store')->name('admin/incidencies/store');
Route::get('admin/incidencies', 'App\Http\Controllers\IncidenciesController@index')->name('admin/incidencies');
Route::get('admin/incidencies/editar/{id}', 'App\Http\Controllers\IncidenciesController@edit')->name('admin/incidencies/editar');
Route::put('admin/incidencies/update/{id}', 'App\Http\Controllers\IncidenciesController@update')->name('admin/incidencies/update');

Route::delete('admin/incidencies/destroy/{id}', 'App\Http\Controllers\IncidenciesController@destroy')->name('admin/incidencies/destroy');
Route::put('admin/incidencies/UpdateSelect/{id}', 'App\Http\Controllers\IncidenciesController@UpdateSelect')->name('admin/incidencies/UpdateSelect');
Route::get('admin/incidencies/show/{id}', 'App\Http\Controllers\IncidenciesController@show')->name('admin/incidencies/show');

Route::get('admin/incidencies/whatsapp/{id}', 'App\Http\Controllers\IncidenciesController@sendWhatsApp')->name('admin/incidencies/whatsapp');

//RUTAS DE PROVEIDORS

    Route::get('admin/proveïdors/crear', 'App\Http\Controllers\ProveedorController@crear')->name('admin/proveïdors/crear');
    Route::put('admin/proveïdors/store', 'App\Http\Controllers\ProveedorController@store')->name('admin/proveïdors/store');
    Route::get('admin/proveïdors', 'App\Http\Controllers\ProveedorController@index')->name('admin/proveïdors');
    Route::get('admin/proveïdors/editar/{id}', 'App\Http\Controllers\ProveedorController@edit')->name('admin/proveïdors/editar');
    Route::put('admin/proveïdors/update/{id}', 'App\Http\Controllers\ProveedorController@update')->name('admin/proveïdors/update');
    Route::delete('admin/proveïdors/destroy/{id}', 'App\Http\Controllers\ProveedorController@destroy')->name('admin/proveïdors/destroy');
    Route::put('admin/proveïdors/UpdateSelect/{id}', 'App\Http\Controllers\ProveedorController@UpdateSelect')->name('admin/proveïdors/UpdateSelect');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
