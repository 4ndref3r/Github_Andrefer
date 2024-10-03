<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
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
        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    public function verify(Request $request, $token)
    {
        try {
            // Buscar el usuario por el token en la base de datos
            $user = User::where('email_verification_token', $token)->first();
            if (!$user) {
                return redirect('/login')->withErrors(['error' => 'El token de activación no es válido.']);
            }


            // Verificar si el usuario ya tiene su correo verificado
            if ($user->estado == 1) {
                return redirect('/login')->with('status', '¡Cuenta ya activada!');
            }
    
            // Actualizar el estado del usuario en la base de datos
            DB::table('usuario')
                ->where('id', $user->id)
                ->update([
                    'estado' => 1, // Cambiar el estado a 1 (activado)
                    'email_verification_token' => null, // Eliminar el token de verificación
            ]);
            return redirect('/login')->with('success', '¡Cuenta activada exitosamente! Ahora puedes iniciar sesión.');
        } catch (\Exception $e) {
            // Guardar el error en los logs
            Log::error('Error en la verificación: ' . $e->getMessage());
    
            return redirect('/login')->withErrors(['message' => 'Ocurrió un error al verificar la cuenta.']);
        }
    }
}
