<?php

namespace App\Http\Controllers\Plataforma;

use App\Http\Controllers\Controller;
use App\Models\Candidatos;
use App\Models\contacto;
use App\Models\emails;
use App\Models\Vagas;
use Illuminate\Http\Request;

class PlataformaHome extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vagas = Vagas::where('estado', 0)->paginate(3);

        $candidatosFelizes = Candidatos::where('estado', 2)->get();
        $vagasTotal = Vagas::all();
        $reclamacoes = Vagas::all();
        $candidaturas = Candidatos::all();

        return view('Plataforma.index', compact('vagas', 'candidatosFelizes', 'vagasTotal', 'reclamacoes', 'candidaturas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function inscritos(string $id)
    {
        $candidatos = Candidatos::where('idvaga', $id)->get();
        $total = count($candidatos);
        return $total;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function contacto(Request $request)
    {

        try {

            $contacto = new contacto();

            $contacto->nome = $request->nome;
            $contacto->email = $request->email;
            $contacto->assunto = $request->assunto;
            $contacto->mensagem = $request->mensagem;
            $contacto->save();

            return redirect()->back()->with('contacto.send.success', 1);


        } catch (\Throwable $th) {
            //throw $th;
            // dd($th);
            return redirect()->back()->with('contacto.send.error', 1);
        }

    }

    /**
     * Display the specified resource.
     */
    public function newsletter(Request $request)
    {

        try {

            $email = new emails();

            $email->email = $request->email;
            $email->save();

            return redirect()->back()->with('newsletter.send.success', 1);


        } catch (\Throwable $th) {
            //throw $th;
            // dd($th);
            return redirect()->back()->with('newsletter.send.error', 1);
        }
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
    public function destroy(string $id)
    {
        //
    }
}
