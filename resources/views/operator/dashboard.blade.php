@extends('partials.sidebar')
@section('container')
{{-- <h1>Ini dashboard operator.</h1> --}}
<div class="relative bg-indigo-200 dark:bg-indigo-500 p-4 sm:p-6 rounded-sm overflow-hidden mb-8">
    <h1 class="text-2xl md:text-3xl text-slate-800 dark:text-slate-100 font-bold mb-1">Halo, John {{-- {{ Auth::user()->name }} --}} 👋</h1>
    <p class="dark:text-indigo-200">Selamat Datang di AcademicPro!</p>
</div>
<div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-4 p-4 gap-4">
    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-center p-20 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <div class="flex justify-center w-15 h-12">
        </div>
        <div class="text-center">
            <p class="text-5xl justify-center text-center">567</p>
            <p>Mahasiswa</p>
        </div>
    </div>
    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-center p-20 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <div class="flex justify-center w-15 h-12">
        </div>
        <div class="text-center">
            <p class="text-5xl justify-center text-center">557</p>
            <p class="text justify-center">Dosen</p>
        </div>
    </div>

    {{-- Profile Card --}}
    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-center p-20 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group row-span-2 col-span-2">
        <div class="flex justify-center w-15 h-12">
        </div>
        <div class="text-center">
            <img src="https://avatars.mds.yandex.net/i?id=2cade7f483adb39d6e5c54644bb43b186822689a-9270567-images-thumbs&n=13" alt="Profile Picture" class="rounded-full w-32 h-32 mx-auto mb-4">
            <h2 class="text-2xl font-bold">John Doe</h2>
            <p class="text-gray-400">Operator</p>
            <p class="text-gray-400">john.doe@example.com</p>
        </div>
    </div>

    <!-- Buat Akun Mahasiswa -->
    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-left p-4 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group col-span-2 ">
        <div class="flex justify-center w-15 h-14">
        </div>
        <div class="text-left">
            <a href="/buat/mahasiswa" class="text-3xl text-left">Buat Akun Mahasiswa</a>
            <p href="/buat/mahasiswa" class="text-left">Buat akun baru untuk mahasiswa</p>
        </div>
    </div>

    <!-- Buat Akun Dosen -->
    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-left p-4 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group col-span-2 ">
        <div class="flex justify-center w-15 h-14">
        </div>
        <div class="text-center">
            <p class="text-3xl text-center">Buat Akun Dosen</p>
            <p class="text-left">Buat akun baru untuk dosen</p>
        </div>
    </div>
</div>

    
 @endsection
