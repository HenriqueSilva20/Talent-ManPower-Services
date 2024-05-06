<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Vagas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminManager extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::check()) {
            $admins = User::orderBy('name', 'asc')->paginate(12);
            return view('Admin.admin', compact('admins'));
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
    public function store(Request $req)
    {

        try {

            //dd($req);

            // Verifica se a foto é uma imagem
            $file = $req->foto;
            $extension = $file->getClientOriginalExtension();
            $allowedExtensions = ['jpg', 'jpeg', 'png'];
            if (!in_array($extension, $allowedExtensions)) {
                return redirect()->back()->with('img.create.error', 1);
            }

            // Faz o upload da foto
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('/uploads/fotos/'), $fileName);
            $password = "admin";

            $d = DB::table('users')->insert([
                'name'=> $req->nome,
                'username'=> 'manpower'.rand(1, 100),
                'email'=> $req->email,
                'telefone'=> $req->telefone,
                'foto' => $fileName,
                'estado' => 0,
                'password' => Hash::make($password),
            ]);

            //dd($d);
            return redirect()->back()->with('admin.create.success',1);

        } catch (\Throwable $th) {
            //throw $th;
            //dd($req);
            return redirect()->back()->with('admin.create.error',1);
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
    public function update(Request $request, $id)
    {

        try {

            //dd($request);
            $admin = User::findOrFail($id);

            if ($request->foto != null)
            {

                if ($admin->foto != null)
                {
                    //Apagar a foto de perfil do admin
                    $fotoPerfil = $admin->foto;

                    // Construir o caminho completo do arquivo
                    $caminhoArquivo = public_path('/uploads/fotos/') . $fotoPerfil;

                    // Verificar se o arquivo existe antes de tentar excluí-lo
                    if (file_exists($caminhoArquivo)) {
                        // Excluir o arquivo
                        unlink($caminhoArquivo);
                    }
                }

                $file = $request->foto;
                $extension = $file->getClientOriginalExtension();
                $allowedExtensions = ['jpg', 'jpeg', 'png'];

                if (!in_array($extension, $allowedExtensions)) {
                    return redirect()->back()->with('img.create.error', 1);
                }

                // Faz o upload da foto
                $fileName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('/uploads/fotos/'), $fileName);

                DB::table('users')->where('id', $id)->update([
                    'name' => $request->nome,
                    'email' => $request->email,
                    'telefone' => $request->telefone,
                    'foto' => $fileName,
                ]);

                //dd($request);
                return redirect()->back()->with('admin.update.success', 1);

            } else {

                DB::table('users')->where('id', $id)->update([
                    'name' => $request->nome,
                    'email' => $request->email,
                    'telefone' => $request->telefone,
                ]);

                //dd($request);
                return redirect()->back()->with('admin.update.success', 1);

            }

        } catch (\Throwable $th) {
            // throw $th;
            // dd ($th);
            return redirect()->back()->with('admin.update.error', 1);
        }

    }

    public function estado($id, $estado)
    {

        try {
            $admin = User::findOrFail($id);
            $admin->estado = $estado;
            $admin->save();

            return redirect()->back()->with('admin.estado.success', 1);

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('admin.estado.error', 1);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {

            $admin = User::findOrFail($id);

            if ($admin->foto != null)
            {
                 //Apagar a foto de perfil do admin
                $fotoPerfil = $admin->foto;

                // Construir o caminho completo do arquivo
                $caminhoArquivo = public_path('/uploads/fotos/') . $fotoPerfil;

                // Verificar se o arquivo existe antes de tentar excluí-lo
                if (file_exists($caminhoArquivo)) {
                    // Excluir o arquivo
                    unlink($caminhoArquivo);
                }
            }

            $admin->delete();

            return redirect()->back()->with('admin.delete.success', 1);

        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('admin.delete.error', 1);
        }
    }
}
