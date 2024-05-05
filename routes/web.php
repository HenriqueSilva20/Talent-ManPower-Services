<?php

use App\Http\Controllers\Admin\AdminCadastrar;
use App\Http\Controllers\Admin\AdminCaixaEntrada;
use App\Http\Controllers\Admin\AdminCandidatos;
use App\Http\Controllers\Admin\AdminHome;
use App\Http\Controllers\Admin\AdminInfoVaga;
use App\Http\Controllers\Admin\AdminLogin;
use App\Http\Controllers\Admin\AdminManager;
use App\Http\Controllers\Admin\AdminNewsletter;
use App\Http\Controllers\Admin\AdminVagas;
use App\Http\Controllers\Plataforma\PlataformaHome;
use App\Http\Controllers\Plataforma\PlataformaResultado;
use App\Http\Controllers\Plataforma\PlataformaVagaDetalhe;
use App\Http\Controllers\Plataforma\PlataformaVagas;
use App\Http\Controllers\Plataforma\PlataformaVerificarCandidatura;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/**
 * Routa para o template da Loja
 */
Route::get('/', [PlataformaHome::class, 'index'])->name('plataforma');
Route::get('entrar', [AdminLogin::class, 'index'])->name('painel.login');

/*
Route::middleware(['auth', 'Admin'])->middleware(['auth', 'Admin'])->group(function () {
    Route::get('/home', [PlataformaHomeController::class, 'index'])->name('plataforma.home');
});*/

Route::prefix('plataforma')->group(function () {
    $descode = md5('4rigrrh972727t9iuegegeg38389y82h9@@iheihejjeyg7494h4rigrrh972727t9iuegegeg38389y82h9@@iheihejjeyg7494h');

    // Routas HomePage
    $codesearch = sha1("12345678901233736393hmcmc9990991mnvv202029vmvchdjdj345678901234567890");
    Route::get('/home', [PlataformaHome::class, 'index'])->name('plataforma.home');
    Route::post('/home/contacto', [PlataformaHome::class, 'contacto'])->name('plataforma.contacto');
    Route::post('/home/newsletter', [PlataformaHome::class, 'newsletter'])->name('plataforma.newsletter');
    //------------------------------------------------------------

    // Routas VagasPage
    Route::get('/vagas', [PlataformaVagas::class, 'index'])->name('plataforma.vagas');
    //------------------------------------------------------------

    // Routas VagaDetalhePage
    Route::get('/vaga/{id}/{nome}', [PlataformaVagaDetalhe::class, 'index'])->name('plataforma.detalhe');
    Route::post('/vaga/candidatura', [PlataformaVagaDetalhe::class, 'candidatura'])->name('plataforma.candidatura');
    //------------------------------------------------------------

    // Routas VerificarCandidaturaPage
    Route::get('/verificação', [PlataformaVerificarCandidatura::class, 'index'])->name('plataforma.verificar');
    Route::post('/verificação/store', [PlataformaVerificarCandidatura::class, 'store'])->name('plataforma.verificar.store');
    //------------------------------------------------------------

    // Routas ResultadoPage
    Route::get('/resultado/{id}', [PlataformaResultado::class, 'index'])->name('plataforma.resultado');
    //------------------------------------------------------------

});

/**
 * Routa para o Painel do admin
*/
Route::prefix('painel')->group(function(){

    //Home
    Route::get('/home', [AdminHome::class, 'index'])->name('painel.admin');
    //------------------------------------------------------------

    //Vagas
    Route::get('/vagas', [AdminVagas::class, 'index'])->name('painel.vagas');
    Route::get('/vagas/cadastrar', [AdminCadastrar::class, 'index'])->name('painel.cadastrar');
    Route::post('/vagas/cadastrar/create', [AdminCadastrar::class, 'store'])->name('painel.create.vaga');
    Route::post('/vagas/cadastrar/update/{id}', [AdminCadastrar::class, 'update'])->name('painel.store.update');
    Route::get('/vagas/cadastrar/delete/{id}', [AdminVagas::class, 'destroy'])->name('painel.create.delete');
    Route::get('/vagas/cadastrar/delete/{id}/{estado}', [AdminVagas::class, 'update'])->name('painel.create.update');
    //------------------------------------------------------------

    //InfoVagas
    Route::get('/infovagas/{id}/{titulo}', [AdminInfoVaga::class, 'index'])->name('painel.info');
    //------------------------------------------------------------

    //Candidatos
    Route::get('/candidatos/{id}/{nome}', [AdminCandidatos::class, 'index'])->name('painel.candidatos');
    Route::get('/candidatos/estado/{id}/{estado}', [AdminCandidatos::class, 'estado'])->name('painel.candidato.estado');
    //------------------------------------------------------------

    //Caixa de entrada
    Route::get('/caixa', [AdminCaixaEntrada::class, 'index'])->name('painel.caixa');
    Route::get('/caixa/delete/{id}', [AdminCaixaEntrada::class, 'destroy'])->name('painel.caixa.delete');
    //------------------------------------------------------------

    //Newsletter
    Route::get('/newsletter', [AdminNewsletter::class, 'index'])->name('painel.newsletter');
    //------------------------------------------------------------

    //Administradores
    Route::get('/administradores', [AdminManager::class, 'index'])->name('painel.admins');
    Route::post('/administradores/create', [AdminManager::class, 'store'])->name('painel.admin.store');
    Route::post('/administradores/update/{id}', [AdminManager::class, 'update'])->name('painel.admin.update');
    Route::get('/administradores/estado/{id}/{estado}', [AdminManager::class, 'estado'])->name('painel.admin.estado');
    Route::get('/administradores/delete/{id}', [AdminManager::class, 'destroy'])->name('painel.admin.delete');
    //------------------------------------------------------------

});

Auth::routes();

