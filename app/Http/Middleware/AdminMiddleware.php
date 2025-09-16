<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // CARA 1
        // cek apakah user sudah login dan memiliki role 'admin'
        // if (Auth()->check() && Auth()->user()->role !== 'admin') {
        //     // jika bukan admin, redirect ke halaman home atau tampilkan 403
        //     return redirect('/')->with('error', 'You do not have admin access.');
        // }
        // // jika sudah login dan memiliki role 'admin', lanjutkan ke request selanjutnya
        // return $next($request);

        // CARA 2
        // Cek apakah user sudah login dan memiliki role 'admin'
        if (Auth()->check() && Auth()->user()->role === 'admin') {
            // Jika user adalah admin, lanjutkan ke request selanjutnya
            return $next($request);
        } else {
            // Jika user bukan admin, tampilkan 403 Forbidden
            return abort(403, 'Unauthorized action.');
        }   
    }
}
