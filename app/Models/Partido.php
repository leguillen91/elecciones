<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;
    protected $table ='partidos';

    public function candidatos()
    {
        return $this->hasMany(Candidato::class, 'partidoID', 'partidoID');
    }
}
