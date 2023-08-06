<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaixaSalarial extends Model
{
    use HasFactory;

    protected $table = 'faixa_salarial';

    public function Vaga()
    {
        return $this->hasMany(Vaga::class, 'faixa_salarial', 'id');
    }
}
