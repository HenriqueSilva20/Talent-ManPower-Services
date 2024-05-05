<?php

namespace App\Http\Controllers\Plataforma;

use App\Http\Controllers\Controller;
use App\Models\Candidatos;
use App\Models\Vagas;
use Illuminate\Http\Request;

class PlataformaVagaDetalhe extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(string $id, string $nome)
    {
        $vaga = Vagas::where('id', $id)->first();
        return view('Plataforma.vagadetalhe', compact('vaga', 'nome'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function candidatura(Request $request)
    {
        try {

            $experiencias = [];
            foreach ($request->experiencia as $experienciaItem) {
                $experiencias[] = $experienciaItem;
            }
            $experienciasJson = json_encode($experiencias);

            $requisito = [];
            foreach ($request->requisitos as $req) {
                $requisito[] =$req;
            }
            $requisitoJson = json_encode($requisito);

            $qualificacoes = [];
            foreach ($request->qualificacoes as $qualificacao) {
                $qualificacoes[] =$qualificacao;
            }
            $qualificacoesJson = json_encode($qualificacoes);

            $candidatura = new Candidatos();

            $referencia = rand(0, 1000000000000000);
            $referenciaHash = ucwords(base64_encode(substr($referencia, 0, 9)));

            $candidatura->nome = $request->nome;
            $candidatura->email = $request->email;
            $candidatura->telefone = $request->telefone;
            $candidatura->curriculum = $request->curriculum;
            $candidatura->experiencias = $experienciasJson;
            $candidatura->requisitos = $requisitoJson;
            $candidatura->qualificacoes = $qualificacoesJson;
            $candidatura->idvaga = $request->idvaga;
            $candidatura->referencia = $referenciaHash;

            $candidatura->save();

            return redirect()->back()->with('candidatura.create.success', 1);

        } catch (\Throwable $th) {
            //throw $th;
            dd($th);
            return redirect()->back()->with('candidatura.create.error', 1);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function validar_numero_vagas(string $id)
    {
        $candidatos = Candidatos::where('idvaga', $id)->where('estado', 2)->get();
        $resultado = count($candidatos);
        return $resultado;
    }
}
