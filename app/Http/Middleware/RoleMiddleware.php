<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string  $role
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle(Request $request, Closure $next, $role)
    {
        // Ensure the user is authenticated
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // Get the authenticated user
        $user = Auth::user();

        // Check the role and apply the conditions accordingly
        if ($role === 'admin') {
            // Admin role: ensure the user has 'admin' role
            if ($user->role !== 'admin') {
                // If the user is not an admin, abort with 403 Forbidden
                return redirect()->route('home')->with('error', 'Pengguna Bukan Admin');
            }
        }

        if ($role === 'alumni') {
            // Alumni role: ensure the user has 'alumni' role and graduated in 2020 or later
            if ($user->role !== 'alumni' || $user->Mahasiswa->angkatan < 2020) {
                // If the user is not an alumni or graduated before 2020, abort with 403 Forbidden
                return redirect()->route('home')->with('error', 'Pengguna Bukan Alumni');
            }
        }

        // If all checks pass, continue to the next middleware or controller
        return $next($request);
    }

}