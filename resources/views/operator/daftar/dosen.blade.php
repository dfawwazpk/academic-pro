@extends('partials.sidebar')

@section('container')
<div class="relative bg-indigo-200 dark:bg-indigo-500 p-7 sm:p-7 rounded-sm overflow-hidden mb-10 mt-10">
    <h1 class="text-2xl md:text-3xl text-slate-800 dark:text-slate-100 font-bold mb-1">Daftar Dosen {{-- {{ Auth::user()->name }} --}} </h1>
    
</div>
<div class="grid grid-cols-2 p-4 gap-4">
    <div class="col-start-2">
        <div class="grid grid-cols-3">
            <div class="col-start-2">
                <button class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-full gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                    <span>Hapus Akun</span>
                </button>
            </div>
            <div class="col-start-3">
                <a href="/buat/dosen" class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-full gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                    <span>Tambah Akun</span>
                </a>
            </div>
        </div>
    </div>
</div>

{{-- Nav Diatas Tabel --}}
<div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-5 p-4 gap-4">
    <div class="mb-2 col-span-5 flex items-center">
        <div class="w-full">
            <input type="text" name="nim" class="border rounded w-full py-2 px-4 text-black @error('nim') is-invalid @else @enderror" id="nim" placeholder="Cari NIP/Nama" value="{{ old('nim') }}">
            @error('nim')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        
    </div>

</div>


<section class="container px-4 mx-auto">
    <div class="flex flex-col">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-7">
                <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center gap-x-3">
                                        <input type="checkbox" class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">
                                        <button class="flex items-center gap-x-2">
                                            <span>NIP</span>

                                            <svg xmlns="http://www.w3.org/2000/svg"  height="1em" viewBox="0 0 320 512" fill=white> 
                                                <path  d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z"/></svg>
                                        </button>
                                    </div>
                                </th>
                                <th scope="col" class="px-3.5 py-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 flex items-center">
                                    <div class= "flex items-center gap-x-2">
                                    <span>Nama</span>
                                    <svg xmlns="http://www.w3.org/2000/svg"  height="1em"  viewBox="0 0 320 512" fill="white">
                                        <path d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z" />
                                    </svg>
                                    </div>
                                </th>
                                
                            
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                            <tr>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                    <div class="inline-flex items-center gap-x-3">
                                        <input type="checkbox" class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">

                                        <span>197000xxxxxxxx</span>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                    <div class="flex items-center gap-x-2">
                                        <div>
                                            <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Arthur Melo</h2>
                                        </div>
                                    </div>
                                </td>
                                
    

                                        {{--  <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                            Download
                                        </button>
                                        --}}
                                    
                                </td>
                            </tr>
                            <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox" class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">
    
                                            <span>197000xxxxxxxx</span>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Imroatus Zadin</h2>
                                            </div>
                                        </div>
                                    </td>       
    
                                            {{--  <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                Download
                                            </button>
                                            --}}
                                        
                                    </td>
                                </tr>
                                <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                    <tr>
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                            <div class="inline-flex items-center gap-x-3">
                                                <input type="checkbox" class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">
        
                                                <span>197000xxxxxxxx</span>
                                            </div>
                                        </td>
                                        <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            <div class="flex items-center gap-x-2">
                                                <div>
                                                    <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Vastia Kobo</h2>
                                                </div>
                                            </div>
                                        </td>
                                                   
        
                                                {{--  <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                    Download
                                                </button>
                                                --}}
                                            
                                        </td>
                                    </tr>    
                            
                                    <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                        <tr>
                                            <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                <div class="inline-flex items-center gap-x-3">
                                                    <input type="checkbox" class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">
            
                                                    <span>197000xxxxxxxx</span>
                                                </div>
                                            </td>
                                            <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                <div class="flex items-center gap-x-2">
                                                    <div>
                                                        <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Kureijio</h2>
                                                    </div>
                                                </div>
                                            </td>
                                                                        
                                            <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                                    <tr>
                                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                            <div class="inline-flex items-center gap-x-3">
                                                                <input type="checkbox" class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">
                        
                                                                <span>197000xxxxxxxx</span>
                                                            </div>
                                                        </td>
                                                        <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                            <div class="flex items-center gap-x-2">
                                                                <div>
                                                                    <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Arthur Melo</h2>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        
                            
                        
                                                                {{--  <button class="text-blue-500 transition-colors duration-200 hover:text-indigo-500 focus:outline-none">
                                                                    Download
                                                                </button>
                                                                --}}
                                                            
                                                        </td>
                                                    </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-between mt-6">
        <a href="#" class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
            </svg>

            <span>
                previous
            </span>
        </a>

        <div class="items-center hidden md:flex gap-x-3">
            <a href="#" class="px-2 py-1 text-sm text-blue-500 rounded-md dark:bg-gray-800 bg-blue-100/60">1</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">2</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">3</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">...</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">12</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">13</a>
            <a href="#" class="px-2 py-1 text-sm text-gray-500 rounded-md dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">14</a>
        </div>

        <a href="#" class="flex items-center px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
            <span>
                Next
            </span>

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
            </svg>
        </a>
    </div>
</section>
@endsection
