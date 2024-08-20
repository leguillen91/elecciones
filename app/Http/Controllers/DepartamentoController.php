<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentoController extends Controller
{

    //vistas de Home

    public function vistaSimulador(){
    return view('vistaSimulador');
    }

    public function vistaProcesoElectoral(){
        return view('vistaProcesoElectoral');
    }


    public function vistaCandidatos(){
    return view('vistaCandidatos');
    }

    public function vistaVotaciones(){
    return view('vistaVotaciones');
    }

    public function vistaResultados(){
    return view('vistaResultados');
    }

    
    // 1. Listar todos los departamentos
    public function index(){
        $departamentos = Departamento::all();
       //returnresponse()->json($departamentos); // Puedes devolver una vista o JSON
    return view('departamentos', compact('departamentos'));
    }

}
