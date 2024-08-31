<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CekUmur
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        $umur = $request->session()->get('umur');

        // jika umurnya dibawah 18 tahun, maka akan diarahkan ke form inputnya lagi.

        if($umur < 18){
            return back()->with('error', 'Umur kamu belum mencapai 18 tahun');
        }

        return $next($request);
    }
}
