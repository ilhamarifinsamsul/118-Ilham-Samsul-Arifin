<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role = null): Response
    {
        if (session()->get('isLogged') == null && session()->get('userId') == null) {
            return redirect()->route('auth.login')->with('error', 'Perlu Login Terlebih Dahulu');
        }

        if ($role != null) {
            $role = explode("|", $role);
            foreach ($role as $r) {
                if (session()->get('role') == $r) {
                    return $next($request);
                }
            }
            return redirect()->route('auth.login')->with('error', 'Anda Tidak Memiliki Akses');
        }
        return $next($request);
    }
}
