<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setor extends Model
{
    use HasFactory;

    protected $table = 'setor';

    public function Vaga()
    {
        return $this->hasMany(Vaga::class, 'setor', 'id');
    }
}
