<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PeminjamMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        /*
        |---------------------------------------------------------
        | CEK LOGIN PEMINJAM
        |---------------------------------------------------------
        */

        if (!Auth::guard('peminjam')->check()) {

            return redirect('/loginpeminjam')
                ->with('error', 'Silahkan login sebagai peminjam');
        }

        return $next($request);
    }
}