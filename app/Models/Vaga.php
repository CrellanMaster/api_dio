<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaga extends Model
{
    use HasFactory;

    protected $table = 'vagas';


    public function anunciante()
    {
        return $this->belongsTo(Anunciante::class, 'id_empresa', 'id');
    }

    public function modalidade()
    {
        return $this->belongsTo(Modalidade::class, 'modalidade', 'id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status', 'id');
    }

    public function setor()
    {
        return $this->belongsTo(Setor::class, 'setor', 'id');
    }

    public function tipoDeContrato()
    {
        return $this->belongsTo(TipoDeContrato::class, 'tipo_contrato', 'id');
    }

    public function faixaSalarial()
    {
        return $this->belongsTo(FaixaSalarial::class, 'faixa_salarial', 'id');
    }
}
