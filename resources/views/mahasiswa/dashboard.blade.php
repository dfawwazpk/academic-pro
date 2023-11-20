@extends('partials.sidebar')
@section('container')
{{-- <h1>Ini dashboard operator.</h1> --}}
<div class="relative bg-indigo-200 dark:bg-indigo-500 p-4 sm:p-6 rounded-sm overflow-hidden mb-8 mt-10">
    <h1 class="text-2xl md:text-3xl text-slate-800 dark:text-slate-100 font-bold mb-1">{{ Auth::user()->nama }} 👋</h1>
    <p class="dark:text-indigo-200">Selamat Datang di AcademicPro!</p>
</div>

<div class="grid grid-cols-2 grid-rows-4 p-4 gap-4">
    <a href="/riwayat/irs" class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-left p-4 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group row-start-1">
        <div class="text-center">
            <p class="text-3xl text-left">Cek Data IRS</p>
            <p class="text-left">Cek isian rencara studi anda</p>
        </div>
    </a>

    <a href="/riwayat/khs" class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-left p-4 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group row-start-2">
        <div class="text-center">
            <p class="text-3xl text-left">Cek Data KHS</p>
            <p class="text-left">Cek data kartu hasil studi anda</p>
        </div>
    </a>
    
    <a href="/riwayat/pkl" class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-left p-4 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group row-start-3">
        <div class="text-center">
            <p class="text-3xl text-left">Input data PKL</p>
            <p class="text-left">Masukkan data praktik kerja lapangan anda</p>
        </div>
    </a>

    <a href="/riwayat/skripsi" class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-left p-4 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group row-start-4">
        <div class="text-center">
            <p class="text-3xl text-left">Input data skripsi</p>
            <p class="text-left">Masukkan data skripsi</p>
        </div>
    </a>

    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-center p-20 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group col-start-2 row-span-3">
        <div class="text-center">
            <img src="https://avatars.mds.yandex.net/i?id=2cade7f483adb39d6e5c54644bb43b186822689a-9270567-images-thumbs&n=13" alt="Profile Picture" class="rounded-full w-32 h-32 mx-auto mb-4">
            <h2 class="text-2xl font-bold">{{ $loggedInAccount->value('nama') }}</h2>
            <p class="text-gray-400">{{ $loggedInAccount->value('nim') }}</p>
            <p class="text-gray-400">Departemen Informatika</p>
            <p class="text-gray-400">Fakultas Sains dan Matematika</p>
        </div>
    </div>

    <div class="col-start-2">
        <div class="grid grid-cols-2 gap-2">
            <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-center p-2 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group col-start-1">
                <div class="text-center">
                    <p class="text-5xl justify-center text-center">{{ number_format($ipk, 2, '.', ',') ?? '0.00' }}</p>
                    <p>IPK</p>
                </div>
            </div>

            <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-center p-2 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group col-start-2">
                <div class="text-center">
                    <p class="text-5xl justify-center text-center">{{ $sksk ?? '0' }}</p>
                    <p class="text justify-center">SKS</p>
                </div>
            </div>
        </div>
    </div>
</div>






    
 @endsection
