<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect()->route('users.showEnterForm'); 
        }

        // Obtener el usuario autenticado
        $user = Auth::user();

        // Verificar si el usuario tiene el rol requerido
        if (Str::lower($user->role) !== "administrador") {
            abort(403, 'No tienes permiso para acceder a esta página.');
        }

        return $next($request);
    }
}
