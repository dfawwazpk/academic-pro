@extends('partials.sidebar')
@section('container')
{{-- <h1>Ini dashboard operator.</h1> --}}
<div class="relative bg-indigo-200 dark:bg-indigo-500 p-4 sm:p-6 rounded-sm overflow-hidden mb-8 mt-10">
    <h1 class="text-2xl md:text-3xl text-slate-800 dark:text-slate-100 font-bold mb-1">Hai, {{ $loggedInAccount->value('nama') }}👋</h1>
    <p class="dark:text-indigo-200">Selamat Datang di AcademicPro!</p>
</div>

<div class="grid grid-cols-2 grid-rows-2 p-4 gap-4">
    <a href="/progress-mahasiswa" class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-left p-4 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group row-start-1">
        <div class="text-center">
            <p class="text-3xl text-left">Progress Mahasiswa</p>
            <p class="text-left">Lihat rekap progress perkembangan akademik mahasiswa</p>
        </div>
    </a>

    <a href="/rekap/pkl" class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-left p-4 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group row-start-2">
        <div class="text-center">
            <p class="text-3xl text-left">Progress PKL</p>
            <p class="text-left">Lihat rekap progress PKL mahasiswa</p>
        </div>
    </a>
    
    <a href="/rekap/skripsi" class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-left p-4 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group row-start-3">
        <div class="text-center">
            <p class="text-3xl text-left">Progress Skripsi</p>
            <p class="text-left">Lihat rekap progress skripsi mahasiswa</p>
        </div>
    </a>

    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-left p-4 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group row-start-4">
        <div class="text-center">
            <p class="text-3xl text-left">Verifikasi IRS</p>
            <p class="text-left">Verifikasi IRS Mahasiswa Perwalian</p>
        </div>
    </div>

    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-center p-20 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group col-start-2 row-span-4">
        <div class="flex justify-center w-15 h-12">
        </div>
        <div class="text-center">
            <img src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : 'https://i.ibb.co/P6QfJFc/default-avatar-small.jpg' }}" alt="Profile Picture" class="rounded-full w-32 h-32 mx-auto mb-4">
            <h2 class="text-2xl font-bold">{{ $loggedInAccount->value('nama') }}</h2>
            <p class="text-gray-400">{{ $loggedInAccount->value('nip') }}</p>
            <p class="text-gray-400">Departemen Informatika</p>
            <p class="text-gray-400">Fakultas Sains dan Matematika</p>
        </div>
    </div>    
</div>




    
 @endsection
