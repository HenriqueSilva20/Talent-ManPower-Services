<?php

namespace App\Http\Controllers\Plataforma;

use App\Http\Controllers\Controller;
use App\Models\Candidatos;
use Illuminate\Http\Request;

class PlataformaVerificarCandidatura extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $candidato = Candidatos::where('estado', 0)->first();
        return view('Plataforma.verificar', compact('candidato'));
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
    public function store(Request $request)
    {
        try {

            $candidatura =  Candidatos::where('telefone', $request->telefone)->where('referencia', $request->referencia)->first();

            if ($candidatura != null) {
                return redirect()->route('plataforma.resultado', base64_encode($candidatura->id))->with('candidatura.econtrada', 1);
            } else {
                return redirect()->back()->with('candidatura.nao.econtrada', 1);
            }

        } catch (\Throwable $th) {
            //throw $th;
            // dd($th);
            return redirect()->back()->with('candidatura.processo.error', 1);
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
    public function destroy(string $id)
    {
        //
    }
}
