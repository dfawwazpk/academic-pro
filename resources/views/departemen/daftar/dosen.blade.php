@extends('partials.sidebar')

@section('container')
<div class="relative bg-indigo-200 dark:bg-indigo-500 p-7 sm:p-7 rounded-sm overflow-hidden mb-10 mt-10">
    <h1 class="text-2xl md:text-3xl text-slate-800 dark:text-slate-100 font-bold mb-1">Daftar Dosen {{-- {{ Auth::user()->name }} --}} </h1>
    
</div>


{{-- Nav Diatas Tabel --}}
<div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-5 p-4 gap-4">
    <div class="mb-2 col-span-5 flex items-center">
        <div class="w-full">
            <input type="text" name="nim" class="border rounded-full w-full py-2 px-4 text-black @error('nim') is-invalid @else @enderror" id="nim" placeholder="Cari NIP/Nama" value="{{ old('nim') }}">
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
</section>
@endsection
