<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (!Auth::check()) return redirect('login');

        $user = Auth::user();
        foreach ($roles as $role) {
            if ($user->roles->pluck('nombre')->contains($role)) {
                return $next($request);
            }
        }

        return redirect('home')->with('error', 'No tienes acceso para realizar esta acción.');
    }
}
