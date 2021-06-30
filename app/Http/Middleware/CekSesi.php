<?php

namespace App\Http\Middleware;

use Closure;

class CekSesi
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $sesi = $request->session()->get('role');
        if (!$sesi){
            return redirect()->route('login.index')->withErrors('Anda harus login!');
        }
        return $next($request);
    }
}
