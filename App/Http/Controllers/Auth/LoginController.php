<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(){
        return view('authentication.login');
    }
    function login(Request $request){
        // Imprimir las credenciales que estás enviando
        \Log::info('Credenciales ingresadas: ', ['email' => $request->email, 'password' => $request->password]);
        $request->validate([
            'email' =>'required|email',
            'password'=>'required',
        ]);

        if(Auth::attempt(['email'=>$request->email, 'password' => $request->password], $request->remember)){
            \Log::info('Autenticación exitosa');
            return redirect()->route('mypage.index');
        }else{
        \Log::warning('Error en la autenticación');
        return redirect()->back()->withErrors([
            'message' => 'Las credenciales proporcionadas son incorrectas.']);
        }
    }

    public function logout(){
        Auth::logout(); // Cierra la sesión
        return redirect()->route('authentication.login'); // Redirige al login
    }
}
