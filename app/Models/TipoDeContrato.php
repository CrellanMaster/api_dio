<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDeContrato extends Model
{
    use HasFactory;

    protected $table = 'tipo_de_contrato';

    public function Vaga()
    {
        return $this->hasMany(Vaga::class, 'tipo_contrato', 'id');
    }
}
