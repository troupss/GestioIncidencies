<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



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

//RUTAS DE INCIDENCIES
Route::get('admin/incidencies/crear', 'App\Http\Controllers\IncidenciesController@crear')->name('admin/incidencies/crear');
Route::put('admin/incidencies/store', 'App\Http\Controllers\IncidenciesController@store')->name('admin/incidencies/store');
Route::get('admin/incidencies', 'App\Http\Controllers\IncidenciesController@index')->name('admin/incidencies');
Route::get('admin/incidencies/editar/{id}', 'App\Http\Controllers\IncidenciesController@edit')->name('admin/incidencies/editar');
Route::delete('admin/incidencies/destroy/{id}', 'App\Http\Controllers\IncidenciesController@destroy')->name('admin/incidencies/destroy');
Route::put('admin/incidencies/UpdateSelect/{id}', 'App\Http\Controllers\IncidenciesController@UpdateSelect')->name('admin/incidencies/UpdateSelect');

require __DIR__.'/auth.php';
