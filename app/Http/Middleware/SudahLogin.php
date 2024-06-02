<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SudahLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {   //cek login
        if(Auth::check()){
            //bisa akses url yang aktif
            return $next($request);
        }
        //jika tidak login /tidak punya akses pergi ke halaman login
        return redirect()->route('/');
    }
}
