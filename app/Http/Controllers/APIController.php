<?php

namespace App\Http\Controllers;

use App\Http\Resources\Detalhado\VagaDetalhadaResource;
use App\Http\Resources\VagaResource;
use App\Models\Vaga;
use Illuminate\Http\Request;
use mysql_xdevapi\Exception;

class APIController extends Controller
{
    //
    public function index()
    {
        try {
            $vagas = VagaDetalhadaResource::collection(
                Vaga::with(['Modalidade', 'Anunciante', 'FaixaSalarial', 'Status', 'Setor', 'TipoDeContrato'])->get()
            );
        } catch (Exception $e) {
            return abort(500, "Erro interno");
        }


        return $vagas ? response()->json($vagas, 200) : abort(404, 'Nenhuma vaga encontrada');
    }

    public function getVaga(Vaga $vaga)
    {
        try {
            $data = VagaDetalhadaResource::make(
                $vaga->load('Modalidade', 'Anunciante', 'FaixaSalarial', 'Status', 'Setor', 'TipoDeContrato')
            );
        } catch (\Exception $e) {
            return abort(500, 'Erro interno');
        }

        return $data ? response()->json($data, 200) : abort(404);
    }
}
