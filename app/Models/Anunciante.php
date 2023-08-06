<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anunciante extends Model
{
    use HasFactory;

    protected $table = 'anunciantes';


    public function endereco()
    {
        return $this->hasMany(Endereco::class, 'id_empresa', 'id');
    }

    public function vaga()
    {
        return $this->hasMany(Vaga::class, 'id_empresa', 'id');
    }
}
