<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\PartidoController;
use App\Http\Controllers\VotanteController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\CandidatoController;

Route::get('/', function () {
    return view('home');
});



#---------RUTAS USUARIOS----------------



#---------RUTAS VOTANTES----------------



#---------RUTAS CANDIDATOS----------------



#---------RUTAS DEPARTAMENTOS----------------



#---------RUTAS MUNICIPIOS----------------




#---------OTRAS RUTAS----------------




//Vista Simulador
Route::get('/departamentos', [DepartamentoController::class, 'vistaSimulador'])->name ('vistaSimulador');

//vista proceso Electoral
Route::get('/departamentos', [DepartamentoController::class, 'vistaProcesoElectoral'])->name ('vistaPE');

//vista Candidatos
Route::get('/departamentos', [DepartamentoController::class, 'vistaCandidatos'])->name ('vistaCandidatos');


//vista Votaciones
Route::get('/departamentos', [DepartamentoController::class, 'vistaVotaciones'])->name ('vistaVotaciones');

//vista Resultados
Route::get('/departamentos', [DepartamentoController::class, 'vistaResultados'])->name ('vistaResultados');