<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Mail\UserActivation;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Symfony\Component\Mailer\Messenger\SendEmailMessage;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegisterController extends Controller
{

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function register(Request $request)
    {
        try {
            $this->validator($request->all())->validate();
            $this->create($request->all());
            return redirect('/login')->with('success','Registro exitoso! Verifica tu correo para activar la cuenta.');
        } catch (Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Error al registrar el usuario: ' . $e->getMessage()]);
        }
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nombres' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:usuario'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $token = Str::random(60);
        $id=DB::table('usuario')->insertGetId([
            'nombres' => $data['nombres'],
            'apellidoPaterno' => $data['aPaterno'],
            'apellidoMaterno' => $data['aMaterno'],
            'email' => $data['email'],
            'fechaIngreso' => $data['ingreso'],
            'celular' => $data['celular'],
            'ci' => $data['ci'],
            'rol'=> 'DOCENTE',
            'password' => Hash::make($data['password']),
            'estado' => 0,
            'email_verification_token'=>$token,
        ]);
        $user = User::find($id);
        Mail::to($user->email)->send(new UserActivation($user));
        return $user;
    }
    public function showRegistrationForm()
    {
        return view('authentication.register'); // Asegúrate de que este sea el nombre correcto de tu vista
    }
}
