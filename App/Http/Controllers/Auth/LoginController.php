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
        $request->validate([
            'email' =>'required|email',
            'password'=>'required',
        ]);

        if(Auth::attempt(['email'=>$request->email, 'password' => $request->password], $request->remember)){
            $user=Auth::user();
            session([
                'user_id'=>$user->id,
                'user_name'=> Auth::user()->nombres.' '.Auth::user()->apellidoPaterno,
                'role'=>Auth::user()->rol,
            ]);
            if ($user->estado != 1) {
                Auth::logout();
                return redirect()->back()->withErrors(['message' => 'Tu cuenta no está activa.']);
            }
            return redirect()->route('dashboard.index2');
        }else{
        \Log::warning('Error en la autenticación');
        return redirect()->back()->withErrors([
            'message' => 'Las credenciales proporcionadas son incorrectas.']);
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('authentication.login'); // Redirige al login
    }
}
