<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidatos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminCandidatos extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id, string $nome_candidato)
    {
        if (Auth::check()) {
            $nome = $nome_candidato;
            $candidato = Candidatos::findOrFail(base64_decode($id));
            return view('Admin.candidato', compact('candidato', 'nome'));
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

    public function estado($id, $estado)
    {

        try {
            $candidato = Candidatos::findOrFail($id);
            $candidato->estado = $estado;
            $candidato->save();

            return redirect()->back()->with('candidato.estado.success', 1);

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('candidato.estado.error', 1);
        }

    }

}
