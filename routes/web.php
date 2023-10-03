<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/consultasPendentes', [App\Http\Controllers\controladorConsulta::class,'listarConsultasPendentes'])->name('consultasPendentes');
Route::get('/consultasConcluidas', [App\Http\Controllers\controladorConsulta::class,'listarConsultasConcluidas'])->name('consultasConcluidas');
Route::get('/consultas/novo', [App\Http\Controllers\controladorConsulta::class,'create'])->name('novaConsulta');
Route::get('/consultas', [App\Http\Controllers\controladorConsulta::class,'store'])->name('gravaNovaConsulta');
Route::get('/consultas/apagar/{id}', [App\Http\Controllers\controladorConsulta::class,'destroy'])->name('deletaConsulta');
Route::get('/consultas/editar/{id}', [App\Http\Controllers\controladorConsulta::class,'edit'])->name('editaConsulta');
Route::get('/consultas/{id}', [App\Http\Controllers\controladorConsulta::class,'update'])->name('atualizaConsulta');
Route::get('/consultas/pesquisa', [App\Http\Controllers\controladorConsulta::class,'pesquisarConsulta'])->name('pesquisarConsulta');
Route::get('/consultas/procurarConsulta', [App\Http\Controllers\controladorConsulta::class,'procurarConsulta'])->name('procurarConsulta');