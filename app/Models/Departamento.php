<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    protected $table='departamentos';
    
    public function municipios()
    {
        return $this->hasMany(Municipio::class, 'departamentoID', 'departamentoID');
    }

    public function votantes()
    {
        return $this->hasMany(Votante::class, 'departamentoID', 'departamentoID');
    }
}
