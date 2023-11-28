@extends('partials.sidebar')

@section('container')

<section class="container px-4 mx-auto">
    
    <div class="flex flex-col items-center p-7 sm:p-20 justify-center">
        <div class="flex items-center mb-4">
            <a href="/rekap/mahasiswa" class="inline-block">
                <svg class="w-6 h-6 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13"/>
                </svg>
            </a>            
            <h1 class="text-2xl md:text-3xl text-black font-bold mb-1 p-1">Rekap Skripsi Mahasiswa Informatika</h1>
        </div>
        <h1 class="text-2xl md:text-2xl text-black font-bold mb-1">Fakultas Sains dan Matematika</h1>
    </div>
    
    <div class="flex flex-col">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-7">
                <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th colspan="20" class="py-3.5 px-4  font-bold text-left text-2xl  rtl:text-right text-white">
                                    <div class="flex items-center gap-x-3 justify-center">
                                        <a class="flex items-center ">
                                            <span>Angkatan</span>
                                        </a>
                                    </div>
                                </th>
                            </tr>
                            <tr>  
                                <th colspan="2" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-white">
                                    <div class="flex items-center gap-x-3 justify-center">
                                        <button class="flex items-center ">
                                            <span>2017</span>
                                        </button>
                                    </div>
                                </th>
                                <th colspan="2"class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-white">
                                    <div class="flex items-center justify-center">
                                        <button class="flex items-center">
                                            <span>2018</span>
                                        </button>
                                    </div>
                                </th>
                                <th colspan="2" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-white">
                                    <div class="flex items-center gap-x-3 justify-center">
                                        <button class="flex items-center ">
                                            <span>2018</span>
                                        </button>
                                    </div>
                                </th>
                                <th colspan="2"class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-white">
                                    <div class="flex items-center justify-center">
                                        <button class="flex items-center">
                                            <span>2019</span>
                                        </button>
                                    </div>
                                </th>
                                <th colspan="2" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-white">
                                    <div class="flex items-center gap-x-3 justify-center">
                                        <button class="flex items-center ">
                                            <span>2020</span>
                                        </button>
                                    </div>
                                </th>
                                <th colspan="2"class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-white">
                                    <div class="flex items-center justify-center">
                                        <button class="flex items-center">
                                            <span>2021</span>
                                        </button>
                                    </div>
                                </th>
                                <th colspan="2" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-white">
                                    <div class="flex items-center gap-x-3 justify-center">
                                        <button class="flex items-center ">
                                            <span>2022</span>
                                        </button>
                                    </div>
                                </th>
                                <th colspan="2"class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-white">
                                    <div class="flex items-center justify-center">
                                        <button class="flex items-center">
                                            <span>2023</span>
                                        </button>
                                    </div>
                                </th>
                                <tr>  
                            </tr>
                            <tr>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center gap-x-3">

                                        <button class="flex items-center gap-x-2">
                                            <span>Sudah</span>
                                        </button>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <button class="flex items-center">
                                            <span>Belum</span>
                                        </button>
                                    </div>
                                </th>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center gap-x-3">

                                        <button class="flex items-center justify-center gap-x-2">
                                            <span>Sudah</span>
                                        </button>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <button class="flex items-center">
                                            <span>Belum</span>
                                        </button>
                                    </div>
                                </th>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center gap-x-3">

                                        <button class="flex items-center gap-x-2">
                                            <span>Sudah</span>
                                        </button>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <button class="flex items-center">
                                            <span>Belum</span>
                                        </button>
                                    </div>
                                </th>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center gap-x-3">

                                        <button class="flex items-center gap-x-2">
                                            <span>Sudah</span>
                                        </button>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <button class="flex items-center">
                                            <span>Belum</span>
                                        </button>
                                    </div>
                                </th>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center gap-x-3">

                                        <button class="flex items-center gap-x-2">
                                            <span>Sudah</span>
                                        </button>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <button class="flex items-center">
                                            <span>Belum</span>
                                        </button>
                                    </div>
                                </th>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center gap-x-3">

                                        <button class="flex items-center gap-x-2">
                                            <span>Sudah</span>
                                        </button>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <button class="flex items-center">
                                            <span>Belum</span>
                                        </button>
                                    </div>
                                </th>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center gap-x-3">

                                        <button class="flex items-center gap-x-2">
                                            <span>Sudah</span>
                                        </button>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <button class="flex items-center">
                                            <span>Belum</span>
                                        </button>
                                    </div>
                                </th>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center gap-x-3">

                                        <button class="flex items-center gap-x-2">
                                            <span>Sudah</span>
                                        </button>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <button class="flex items-center">
                                            <span>Belum</span>
                                        </button>
                                    </div>
                                </th>
                            </tr>
                            
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                            <tr>
                            <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <div class="flex items-center justify-center">
                                    <a href="/list/mahasiswa"class="flex items-center">
                                        <span>5</span>
                                    </a>
                                </div>
                            </th>
                            <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <div class="flex items-center justify-center">
                                    <button class="flex items-center">
                                        <span>0</span>
                                    </button>
                                </div>
                            </th>
                            <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <div class="flex items-center justify-center">
                                    <button class="flex items-center">
                                        <span>30</span>
                                    </button>
                                </div>
                            </th>
                            <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <div class="flex items-center justify-center">
                                    <button class="flex items-center">
                                        <span>4</span>
                                    </button>
                                </div>
                            </th>
                            <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <div class="flex items-center justify-center">
                                    <button class="flex items-center">
                                        <span>80</span>
                                    </button>
                                </div>
                            </th>
                            <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <div class="flex items-center justify-center">
                                    <button class="flex items-center">
                                        <span>0</span>
                                    </button>
                                </div>
                            </th>

                            <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <div class="flex items-center justify-center">
                                    <button class="flex items-center">
                                        <span>150</span>
                                    </button>
                                </div>
                            </th>
                            <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <div class="flex items-center justify-center">
                                    <button class="flex items-center">
                                        <span>1</span>
                                    </button>
                                </div>
                            </th>
                            <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <div class="flex items-center justify-center">
                                    <button class="flex items-center">
                                        <span>160</span>
                                    </button>
                                </div>
                            </th>
                            <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <div class="flex items-center justify-center">
                                    <button class="flex items-center">
                                        <span>2</span>
                                    </button>
                                </div>
                            </th>
                            <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <div class="flex items-center justify-center">
                                    <button class="flex items-center">
                                        <span>180</span>
                                    </button>
                                </div>
                            </th>
                            <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <div class="flex items-center justify-center">
                                    <button class="flex items-center">
                                        <span>0</span>
                                    </button>
                                </div>
                            </th>
                            <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <div class="flex items-center justify-center">
                                    <button class="flex items-center">
                                        <span>210</span>
                                    </button>
                                </div>
                            </th>
                            <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <div class="flex items-center justify-center">
                                    <button class="flex items-center">
                                        <span>0</span>
                                    </button>
                                </div>
                            </th>
                            <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <div class="flex items-center justify-center">
                                    <button class="flex items-center">
                                        <span>210</span>
                                    </button>
                                </div>
                            </th>
                            <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <div class="flex items-center justify-center">
                                    <button class="flex items-center">
                                        <span>0</span>
                                    </button>
                                </div>
                            </th>   
                            </tr>
                            
                                {{-- <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <button href ="" class="px-4 py-4 text-sm font-medium text-gray-700 bg-gray-500 hover:bg-emerald-600 rounded-full whitespace-nowrap" style="width: 100px;">
                                        <div class="inline-flex items-center gap-x-2">
                                            <h2 class="text-sm font-normal text-emerald-100">Unduh</h2>
                                        </div>
                                    </button>
                                </td>

                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    
                                    <button href ="" class="px-4 py-4 text-sm font-medium text-gray-700 bg-gray-500 hover:bg-emerald-600 rounded-full whitespace-nowrap" style="width: 100px;">
                                        <div class="inline-flex items-center gap-x-2">
                                            <h2 class="text-sm font-normal text-emerald-100">Setujui</h2>
                                        </div>
                                    </button>

                                    <button href ="" class="px-4 py-4 text-sm font-medium text-gray-700 bg-gray-500 hover:bg-emerald-600 rounded-full whitespace-nowrap" style="width: 100px;">
                                        <div class="inline-flex items-center gap-x-2">
                                            <h2 class="text-sm font-normal text-emerald-100">Tolak</h2>
                                        </div>
                                    </button> --}}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="flex flex-col items-center p-7 sm:p-20 justify-center">
    <div class="flex items-center mb-4">
        <h1 class="text-2xl md:text-3xl text-black font-bold mb-1 p-1">Daftar Mahasiswa Skripsi Informatika Angkatan 20xx</h1>
    </div>
    <h1 class="text-2xl md:text-2xl text-black font-bold mb-1">Fakultas Sains dan Matematika</h1>
</div>

<form action="/progress-mahasiswa">
    <div class="grid lg:grid-cols-5 col-span-5  p-4 gap-4">
        <div class="mb-2 col-span-5 flex">

            <div class="w-2/4">
                <input type="text" id="search" name="search" class="border rounded-full w-full py-2 px-4 text-black" placeholder="Cari NIM/Nama" value="{{ request('search') }}">
            </div>

        </div>
    </div>
</form>


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
                                            <span>NIM</span>

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
                                
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class= "flex items-center gap-x-2">
                                    <span>Semester</span>
                                    </div>
                                </th> 
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class= "flex items-center gap-x-2">
                                    <span>Status</span>
                                    </div>
                                </th> 
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class= "flex items-center gap-x-2">
                                    <span>IPK</span>
                                    </div>
                                </th> 
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class= "flex items-center gap-x-2">
                                    <span>SKS</span>
                                    </div>
                                </th>
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center gap-x-2">
                                    <a>Detail</a>
                                    </div>
                                </th>  
                            </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">

                            @foreach ($mahasiswaList as $mahasiswa)
                            <tr>

                                <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                    <div class="inline-flex items-center gap-x-3">
                                        <input type="checkbox" class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">
                                        <h1>{{ $mahasiswa->nim }}</h1>  
                                    </div>
                                </td>

                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                    <div class="flex items-center gap-x-2">
                                        <div>
                                            <h1>{{ $mahasiswa->nama }}</h1>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                    <div class="flex items-center ">
                                        <div>
                                            <h1>{{ $irsList->where('mahasiswa_id', $mahasiswa->id)->take(1)->value('semester') ?? 1}}</h1>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                    <div class="flex items-center ">
                                        <div>
                                            <h1>{{ $statusList->where('id', $mahasiswa->status)->value('name') }}</h1>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                    <div class="flex items-center ">
                                        <div>
                                            <h1>{{ number_format($khsList->where('mahasiswa_id', $mahasiswa->id)->take(1)->value('ipk'), 2, '.', ',') ?? '0.00' }}</h1>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                    <div class="flex items-center ">
                                        <div>
                                            <h1>{{ $khsList->where('mahasiswa_id', $mahasiswa->id)->take(1)->value('sks_total') ?? '0' }}</h1>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <a href ="/progress-mahasiswa/{{ $mahasiswa->id }}" class="px-4 py-4 text-sm font-medium text-gray-700 bg-gray-500 hover:bg-emerald-600 rounded-full whitespace-nowrap" style="width: 100px;">detail
                                    </a>
                                </td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</section>
@endsection