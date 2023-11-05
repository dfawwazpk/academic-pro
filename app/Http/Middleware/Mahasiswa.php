<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Mahasiswa as MahasiswaModel;

class Mahasiswa
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
            return redirect()->intended('dashboard');
        }
        else{
            $mahasiswa = MahasiswaModel::where('id', Auth::user()->id)->first();
            if(!empty($mahasiswa->nama) &&
               !empty($mahasiswa->tanggal_lahir) &&
               !empty($mahasiswa->no_hp) &&
               !empty($mahasiswa->alamat) &&
               !empty($mahasiswa->kabupaten_kota) &&
               !empty($mahasiswa->provinsi)){
                return $next($request);
            }
            else{
                return redirect()->intended('first-time-login')->with('warning', 'Harap lengkapi data pribadi Anda terlebih dahulu.');
            }
        }
    }
}
