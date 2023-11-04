<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MahasiswaController;

class All
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->role_id != 4) {
            return $next($request);
        }
        else{
            if (MahasiswaController::isDataComplete()) {
                return $next($request);
            }
            else{
                return redirect()->intended('first-time-login')->with('warning', 'Harap lengkapi data pribadi Anda terlebih dahulu.');
            }
        }
    }
}
