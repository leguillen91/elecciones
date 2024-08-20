<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidato extends Model
{
    use HasFactory;
    protected $table ='candidatos';

    public function partidos()
    {
        return $this->belongsTo(Partido::class, 'partidoID', 'partidoID');
    }

    public function cargos()
    {
        return $this->belongsTo(Cargo::class, 'cargoID', 'cargoID');
    }
}
