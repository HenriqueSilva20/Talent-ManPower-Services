<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Vagas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminCadastrar extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            if (isset($_GET['store'])) {

                $id = base64_decode($_GET['vuw']);
                $vaga = Vagas::findOrFail($id);

                return view('Admin.cadastrar', compact('vaga'));

            } else {

                return view('Admin.cadastrar');

            }
        } else {
            return view('auth.login');
        }

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

            $palavraschave = [];
            foreach ($request->palavraschave as $palavra) {
                $palavraschave[] =$palavra;
            }
            $palavraschaveJson = json_encode($palavraschave);

            $requisito = [];
            foreach ($request->requisito as $req) {
                $requisito[] =$req;
            }
            $requisitoJson = json_encode($requisito);

            $qualificacoes = [];
            foreach ($request->qualificacoes as $qualificacao) {
                $qualificacoes[] =$qualificacao;
            }
            $qualificacoesJson = json_encode($qualificacoes);

            $vaga = new Vagas();

            $vaga->titulo = $request->titulo;
            $vaga->vagas = $request->vagas;
            $vaga->data_termino = $request->data_init;
            $vaga->palavras_chaves = $palavraschaveJson;
            $vaga->requisitos = $requisitoJson;
            $vaga->qualificacoes = $qualificacoesJson;

            $vaga->save();



            return redirect()->route('painel.vagas')->with('vaga.create.success', 1);

        } catch (\Throwable $th) {
            //throw $th;
            // dd($th);
            return redirect()->back()->with('vaga.create.error', 1);
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
        try {

            $palavraschave = [];
            foreach ($request->palavraschave as $palavra) {
                $palavraschave[] =$palavra;
            }
            $palavraschaveJson = json_encode($palavraschave);

            $requisito = [];
            foreach ($request->requisito as $req) {
                $requisito[] =$req;
            }
            $requisitoJson = json_encode($requisito);

            $qualificacoes = [];
            foreach ($request->qualificacoes as $qualificacao) {
                $qualificacoes[] =$qualificacao;
            }
            $qualificacoesJson = json_encode($qualificacoes);

            $vaga = Vagas::findOrFail($id);

            $vaga->update([
                'titulo' => $request->titulo,
                'vagas' => $request->vagas,
                'data_termino' => $request->data_init,
                'palavras_chaves' => $palavraschaveJson,
                'requisitos' => $requisitoJson,
                'qualificacoes' => $qualificacoesJson,
            ]);

            return redirect()->route('painel.vagas')->with('vaga.store.update.success', 1);

        } catch (\Throwable $th) {
            //throw $th;
            // dd($th);
            return redirect()->back()->with('vaga.store.update.error', 1);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
