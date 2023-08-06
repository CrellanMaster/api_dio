<?php

namespace App\Http\Resources;

use App\Models\Modalidade;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VagaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'titulo_vaga' => $this->titulo_vaga,
            'descricao' => $this->descricao,
            'data_publicacao' => $this->data_publicacao,
            'data_expiracao' => $this->data_expiracao,
            'cidade_atuacao' => $this->cidade_atuacao
        ];
    }
}
