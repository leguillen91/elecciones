<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;
    protected $table ='municipios';

    public function departamentos()
    {
        return $this->belongsTo(Departamento::class, 'departamentoID', 'departamentoID');
    }

    public function votantes()
    {
        return $this->hasMany(Votante::class, 'municipioID', 'municipioID');
    }
}
