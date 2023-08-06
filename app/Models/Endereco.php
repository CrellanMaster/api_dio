<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $table = 'enderecos';

    public function anunciante()
    {
        return $this->belongsTo(Anunciante::class, 'id_empresa', 'id');
    }
}
