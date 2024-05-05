<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\contacto;
use App\Models\Vagas;
use Illuminate\Http\Request;

class AdminCaixaEntrada extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $mensagens = contacto::orderBy('id', 'desc')->paginate(12);
        return view('Admin.caixa', compact('mensagens'));

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
        //
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
    public function update(string $id, string $estado)
    {

        try {

            $vaga = Vagas::findOrFail($id);

            $vaga->update([
                'estado' => $estado,
            ]);

            if ($estado == 0) {
                return redirect()->back()->with('vaga.activa.success', 1);
            } else {
                return redirect()->back()->with('vaga.inactiva.success', 1);
            }

        } catch (\Throwable $th) {

            //throw $th;
            // dd($th);
            return redirect()->back()->with('vaga.update.error', 1);

        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {

            $mensagem = contacto::findOrFail($id);

            $mensagem->delete();

            return redirect()->back()->with('mensagem.delete.success', 1);

        } catch (\Throwable $th) {

            //throw $th;
            // dd($th);
            return redirect()->back()->with('mensagem.delete.error', 1);

        }
    }
}
