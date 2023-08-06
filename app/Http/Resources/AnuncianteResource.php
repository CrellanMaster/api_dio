<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AnuncianteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'razao_social' => $this->razao_social,
            'cnpj' => $this->cnpj,
            'telefone' => $this->telefone,
            'email' => $this->email
        ];
    }
}
