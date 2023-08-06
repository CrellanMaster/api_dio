<?php

namespace App\Http\Resources\Detalhado;

use App\Http\Resources\AnuncianteResource;
use App\Http\Resources\FaixaSalarialResource;
use App\Http\Resources\ModalidadeResource;
use App\Http\Resources\SetorResource;
use App\Http\Resources\StatusResource;
use App\Http\Resources\TipoContratoResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VagaDetalhadaResource extends JsonResource
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
            'status' => StatusResource::make($this->Status),
            'setor' => SetorResource::make($this->Setor),
            'tipo_contrato' => TipoContratoResource::make($this->TipoDeContrato),
            'titulo_vaga' => $this->titulo_vaga,
            'descricao' => $this->descricao,
            'data_publicacao' => $this->data_publicacao,
            'data_expiracao' => $this->data_expiracao,
            'cidade_atuacao' => $this->cidade_atuacao,
            'faixa_salarial' => FaixaSalarialResource::make($this->FaixaSalarial),
            'anunciante' => AnuncianteResource::make($this->Anunciante),
            'modalidade' => ModalidadeResource::make($this->Modalidade),
        ];
    }
}
