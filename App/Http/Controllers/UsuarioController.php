<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = User::all();
        return view('projects.users',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function show()
    {
        $user = Auth::user();
        return view('extra.settings', compact('user')); 
    }
    public function create(Request $request)
    {
        try {
            $sql=DB::insert("INSERT INTO usuario(nombres,apellidoPaterno,apellidoMaterno,ci,fechaIngreso,email,rol) VALUES (?,?,?,?,?,?,?)",[
                $request->nombres,
                $request->aPaterno,
                $request->aMaterno,
                $request->ci,
                $request->ingreso,
                $request->email,
                $request->rol,
            ]);
        } catch (\Throwable $th) {
            return back()->with("incorrecto", "Error al registrar: " . $th->getMessage());
        }
        if($sql==true){
            return back()->with("correcto","Usuario registrado correctamente");
        } else {
            return back()->with("incorrecto","Error al registrar"); 
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        try {
            $sql=DB::update("UPDATE usuario SET nombres=?, apellidoPaterno=?, apellidoMaterno=?, ci=?, fechaIngreso=?,email=? ,rol=? WHERE id=?",[
                $request->nombres,
                $request->aPaterno,
                $request->aMaterno,
                $request->ci,
                $request->ingreso,
                $request->email,
                $request->rol,
                $request->id,
            ]);
        } catch (\Throwable $th) {
            return back()->with("incorrecto", "Error al modificar: " . $th->getMessage());
        }
        if($sql==true){
            return back()->with("correcto","Usuario modificado correctamente");
        } else {
            return back()->with("incorrecto","Error al modificar"); 
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        try {
            $sql = DB::update("UPDATE usuario SET estado = 0 WHERE id = ?", [$id]);
        } catch (\Throwable $th) {
            return back()->with("incorrecto", "Error al desactivar: " . $th->getMessage());
        }

        return $sql
            ? back()->with("correcto", "Usuario desactivado correctamente")
            : back()->with("incorrecto", "Error al desactivar");
    }

    public function enable($id)
    {
        try {
            $sql = DB::update("UPDATE usuario SET estado = 1 WHERE id = ?", [$id]);
        } catch (\Throwable $th) {
            return back()->with("incorrecto", "Error al activar: " . $th->getMessage());
        }

        return $sql
            ? back()->with("correcto", "Usuario activado correctamente")
            : back()->with("incorrecto", "Error al activar");
    }

        // Cambia la contraseña del usuario
        public function changePassword(Request $request)
        {
            $request->validate([
                'current_password' => 'required',
                'new_password' => 'required|min:8|confirmed',
            ]);
    
            $user = Auth::user(); // Recupera el usuario autenticado
    
            // Verifica que la contraseña actual sea correcta
            if (!Hash::check($request->current_password, $user->password)) {
                return redirect()->back()->withErrors(['current_password' => 'La contraseña actual es incorrecta.']);
            }
    
            DB::table('usuario')  // Asegúrate de que 'usuario' es el nombre correcto de tu tabla
                ->where('id', $user->id)  // Filtra por el ID del usuario autenticado
                ->update([
                    'password' => Hash::make($request->new_password)  // Hashea la nueva contraseña
                ]);
    
            return redirect()->route('perfil.show')->with('success', 'Contraseña cambiada con éxito.');
        }

        public function udperfil(Request $request)
        {
   
            $user = Auth::user(); // Recupera el usuario autenticado

            DB::table('usuario')
                ->where('id', $user->id)
                ->update([
                    'nombres' => $request->input('nombres', $user->nombres),
                    'apellidoPaterno' => $request->input('aPaterno', $user->apellidoPaterno),
                    'apellidoMaterno' => $request->input('aMaterno', $user->apellidoMaterno),
                    'email' => $request->input('email', $user->email),
                    'celular' => $request->input('celular', $user->celular),
                    'fechaIngreso' => $request->input('ingreso', $user->fechaIngreso),
                    'ci' => $request->input('ci', $user->ci)
                ]);
    
            return redirect()->route('perfil.show')->with('success', 'Perfil actualizado con éxito.');
        }

        public function supdate(Request $request)
        {
            // Validar los datos enviados
            $request->validate([
                'horaAcademica' => 'required|integer|min:30|max:180',
            ]);

            // Guardar los cambios en la configuración (esto depende de cómo lo estés manejando)
            config(['inst.horaAcademica' => $request->horaAcademica]);

            // Si estás usando la base de datos para guardar configuraciones, podrías hacer algo como:
            // $config = Configuracion::first();
            // $config->horaAcademica = $request->horaAcademica;
            // $config->save();

            // Redirigir a la vista con un mensaje de éxito
            return redirect()->route('job.jobdashboard')->with('success', 'Parámetros actualizados correctamente');
        }
}
