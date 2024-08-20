<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Votante extends Model
{
    use HasFactory;
    protected $table='votantes';


    public function departamentos()
    {
        return $this->belongsTo(Departamento::class, 'departamentoID', 'departamentoID');
    }

    public function municipios()
    {
        return $this->belongsTo(Municipio::class, 'municipioID', 'municipioID');
    }
}
