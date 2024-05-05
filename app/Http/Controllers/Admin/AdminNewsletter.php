<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\emails;
use App\Models\Vagas;
use Illuminate\Http\Request;

class AdminNewsletter extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $mensagens = emails::orderBy('id', 'desc')->paginate(12);
        return view('Admin.newsletter', compact('mensagens'));

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

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {

            $mensagem = emails::findOrFail($id);

            $mensagem->delete();

            return redirect()->back()->with('email.delete.success', 1);

        } catch (\Throwable $th) {

            //throw $th;
            // dd($th);
            return redirect()->back()->with('email.delete.error', 1);

        }
    }
}
