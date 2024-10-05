<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        // Verificar si el usuario está autenticado
        if (!Auth::check()) {
            return redirect('/login')->withErrors(['message' => 'Necesitas iniciar sesión para acceder a esta página.']);
        }

        // Verificar si el rol del usuario coincide
        if (session('role') !== $role) {
            return redirect('/')->withErrors(['message' => 'No tienes permiso para acceder a esta página.']);
        }

        return $next($request);
    }
}