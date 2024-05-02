<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\failed_login_attempts;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\models\User;
use Carbon\Carbon;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticated(Request $request)
    {
        // Autenticar o usuário
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            // Se o login for bem-sucedido, limpe os registros de tentativas de login malsucedidas
            $user = User::findOrFail(Auth::user()->id);
            //$user->login_attempts = 0;
            //$user->save();

            // Redirecionar o usuário com base em seu nível de acesso
            if ($user->acesso == '1') {

                if ($request->routeIs('plataforma.login')) {
                    Auth::logout(); // Faz logout do usuário
                    return redirect('/home');
                } else {
                    return redirect('painel/home');
                }

            } elseif (in_array($user->acesso, ['2', '3', '0'])) {
                return redirect('/plataforma/home'); // Redirecionar para a home da plataforma
            } else {
                return redirect('/home'); // Redirecionar para a rota raiz
            }
        } else {

            //dd($request);
            return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
                'login' => "Email ou senha inválidos",
            ]);
            
        }
    }

    /*public function authenticated(Request $request)
    {
        // Verifica se o usuário tem acesso de administrador
        if (Auth::user()->acesso == '1') {
            // Verifica se a rota de login é "/plataforma/login"
            if ($request->routeIs('plataforma.login')) {
                // Verifica se excedeu o limite de tentativas de login
                $user = User::findOrFail(Auth::user()->id);
                if ($user->login_attempts >= 5 && $user->last_login_attempt->diffInHours(now()) < 3) {
                    Auth::logout(); // Faz logout do usuário
                    return redirect('/login')->with('login.exced.error', 1); // Redireciona para a rota raiz
                }

                // Limpa as tentativas de login bem-sucedidas
                $user->login_attempts = 0;
                $user->save();
            }
            return redirect('page/found/home'); // Redireciona para a página de administrador
        } elseif (in_array(Auth::user()->acesso, ['2', '3', '0'])) {
            // Verifica se excedeu o limite de tentativas de login
            $user = User::findOrFail(Auth::user()->id);
            if ($user->login_attempts >= 5 && $user->last_login_attempt->diffInHours(now()) < 3) {
                Auth::logout(); // Faz logout do usuário
                return redirect('/entrar/no/mundo/de/aprendizado/hacker')->with('login.exced.error', 1); // Redireciona para a rota raiz
            }

            // Limpa as tentativas de login bem-sucedidas
            $user->login_attempts = 0;
            $user->save();

            return redirect('/plataforma/home'); // Redireciona para a home da plataforma
        } else {
            return redirect('/'); // Redireciona para a rota raiz
        }
    }*/

}
