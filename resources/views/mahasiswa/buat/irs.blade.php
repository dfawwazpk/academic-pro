@extends('partials.sidebar')
@section('container')



<div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-4 p-4 gap-4">
    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-center p-10 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group col-span-4">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="flex justify-center items-center ">
            <form action="/buat/irs" method="post" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 gap-8">
                    <!-- form fields -->

                    <div class="mb-2">
                        <div>
                            <label for="semester" class="block text-grey-darker text-sm font-bold mb-2">Semester Aktif</label>
                            <input type="text" name="semester" class="border rounded w-full py-2 px-3 text-black @error('semester') is-invalid @else  @enderror" id="semester" placeholder="Masukkan semester aktif" value="{{ old('semester') }}">
                            @error('semester')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="sks" class="block text-grey-darker text-sm font-bold mb-2">Jumlah SKS Diambil</label>
                            <input type="text" name="sks" class="border rounded w-full py-2 px-3 text-black @error('sks') is-invalid @else  @enderror" id="sks" placeholder="Masukkan jumlah SKS kumulatif" value="{{ old('sks') }}">
                            @error('sks')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="mb-2">
                        <div>
                            <label for="scan_irs" class="block text-grey-darker text-sm font-bold mb-2">Upload scan IRS</label>
                            <input type="file" name="scan_irs" class="border rounded w-full py-2 px-3 text-white-darker @error('scan_irs') is-invalid @else  @enderror" id="scan_irs">
                            @error('scan_irs')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="flex justify-center gap-2">
                        <button type="submit" class="btn btn-primary">Buat</button>

                        <a href="/riwayat/irs" class="btn btn-error">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- RIWAYAT 


<div class="p-4 sm:p-6 mb-8 mt-10">
    <h1 class="text-2xl md:text-3xl text-black font-bold mb-1">IRS</h1>
</div>

<div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-5 p-4 gap-4 ">
    
    <div class="p-4 sm:p-6 mb-8 mt-10">
        <h2 class="text-xl md:text-2xl text-black font-bold mb-1">Riwayat IRS</h2>
    </div>
    <div class= "col-start-3 p-4 sm:p-6 mb-8 mt-10">
    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap col-start-3 ">
        <button href ="/buat/irs" class="px-4 py-4 text-sm font-medium text-gray-700 bg-gray-500 hover:bg-emerald-600 rounded-full whitespace-nowrap" style="length: 100px" style="width: 0px;">
            <div class="inline-flex items-center gap-x-2 col-start-3 ">
                <h2 class="text-sm font-normal text-emerald-100">Input IRS</h2>
            </div>
        </button>
    </td>
    </div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-5 p-4 gap-4">
{{-- Table IRS 
    <section class="container px-4 mx-auto row-span-3 col-span-3">
        <div class="flex flex-col ">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 ">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-7">
                    <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg ">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700  ">
                            <thead class="bg-gray-50 dark:bg-gray-800">
                                <tr>
                                    <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <div class="flex items-center gap-x-3">
                                            <button class="flex items-center gap-x-2">
                                                <span>Semester</span>
                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512" fill="white"> 
                                                    <path d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z"/>
                                                </svg>
                                            </button>
                                        </div>
                                        
                                    </th>
                                    <th scope="col" class="px-3.5 py-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 flex items-center">
                                        <div class= "flex items-center gap-x-2">
                                        <span>IPS</span>
                                        <svg xmlns="http://www.w3.org/2000/svg"  height="1em"  viewBox="0 0 320 512" fill="white">
                                            <path d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z" />
                                        </svg>
                                        </div>
                                    </th>
                                    
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <div class= "flex items-center gap-x-2">
                                        <span>SKS</span>
                                        <svg xmlns="http://www.w3.org/2000/svg"  height="1em"  viewBox="0 0 320 512" fill="white">
                                            <path d="M41 288h238c21.4 0 32.1 25.9 17 41L177 448c-9.4 9.4-24.6 9.4-33.9 0L24 329c-15.1-15.1-4.4-41 17-41zm255-105L177 64c-9.4-9.4-24.6-9.4-33.9 0L24 183c-15.1 15.1-4.4 41 17 41h238c21.4 0 32.1-25.9 17-41z" />
                                        </svg>
                                        </div>
                                    </th> 
                                    <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                        <div class= "flex items-center gap-x-2">
                                        <span>IRS</span>
                                        </div>
                                    </th> 
 
                                </tr>
                            </thead>
    

                            <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                                <tr>
    
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                        <span>1</span>
                                    </td>
                                    
    
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800 dark:text-white ">4.00</h2>
                                            </div>
                                        </div>
                                    </td>
    
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="flex items-center ">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800 dark:text-white">21</h2>
                                            </div>
                                        </div>
                                    </td>
    
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
    
                                            <h2 class="text-sm font-normal">Disetujui</h2>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                
                                    <tr>
    
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                            <span>2</span>
                                        </td>
                                        
        
                                        <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            <div class="flex items-center gap-x-2">
                                                <div>
                                                    <h2 class="text-sm font-medium text-gray-800 dark:text-white ">4.00</h2>
                                                </div>
                                            </div>
                                        </td>
        
                                        <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                            <div class="flex items-center ">
                                                <div>
                                                    <h2 class="text-sm font-medium text-gray-800 dark:text-white">24</h2>
                                                </div>
                                            </div>
                                        </td>
        
                                        <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                            <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
        
                                                <h2 class="text-sm font-normal">Disetujui</h2>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                    
                                        <tr>
    
                                            <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                <span>3</span>
                                            </td>
                                            
            
                                            <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                <div class="flex items-center gap-x-2">
                                                    <div>
                                                        <h2 class="text-sm font-medium text-gray-800 dark:text-white ">4.00</h2>
                                                    </div>
                                                </div>
                                            </td>
            
                                            <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                <div class="flex items-center ">
                                                    <div>
                                                        <h2 class="text-sm font-medium text-gray-800 dark:text-white">24</h2>
                                                    </div>
                                                </div>
                                            </td>
            
                                            <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                    </svg>
            
                                                    <h2 class="text-sm font-normal">Disetujui</h2>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <tr>
    
                                                <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                                    <span>4</span>
                                                </td>
                                                
                
                                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                    <div class="flex items-center gap-x-2">
                                                        <div>
                                                            <h2 class="text-sm font-medium text-gray-800 dark:text-white ">4.00</h2>
                                                        </div>
                                                    </div>
                                                </td>
                
                                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                                    <div class="flex items-center ">
                                                        <div>
                                                            <h2 class="text-sm font-medium text-gray-800 dark:text-white">18</h2>
                                                        </div>
                                                    </div>
                                                </td>
                
                                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                                    <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                                        </svg>
                
                                                        <h2 class="text-sm font-normal">Disetujui</h2>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                        <span>5</span>
                                    </td>
                                    
    
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800 dark:text-white ">4.00</h2>
                                            </div>
                                        </div>
                                    </td>
    
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="flex items-center ">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800 dark:text-white">22</h2>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60 dark:bg-gray-800">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
    
                                            <h2 class="text-sm font-normal">Ditolak</h2>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>

    
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
{{-- Card Profile 
    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-center p-20 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group row-span-2 col-span-2 col-start-4">
        <div class="flex justify-center w-15 h-12">
        </div>
        <div class="text-center">
            <img src="https://avatars.mds.yandex.net/i?id=2cade7f483adb39d6e5c54644bb43b186822689a-9270567-images-thumbs&n=13" alt="Profile Picture" class="rounded-full w-32 h-32 mx-auto mb-4">
            <h2 class="text-2xl font-bold">Huehue</h2>
            <p class="text-gray-400">240601211xxxxx</p>
            <p class="text-gray-400">Departemen Informatika</p>
            <p class="text-gray-400">Fakultas Sains dan Matematik</p>
        </div>
    </div>
    
</div>
<div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-5 p-4 gap-4 ">

<div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-center p-20 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group col-start-4">
        <div class="flex justify-center w-15 h-12 ">
        </div>
        <div class="text-center ">
            <p class="text-5xl justify-center text-center">3,69</p>
            <p>IPK</p>
        </div>
    </div>
    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-center p-20 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <div class="flex justify-center w-15 h-12">
        </div>
        <div class="text-center">
            <p class="text-5xl justify-center text-center">3,50</p>
            <p class="text justify-center">IPS</p>
        </div>
    </div>


        </div>
    </div>
</div>
--}}
@endsection