@extends('partials.sidebar')
@section('container')
{{-- ini riwayat --}}

<div class="flex items-center mt-6 p-2">
    <a href="/dashboard" class="inline-block">
        <svg class="w-5 h-5 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13"/>
        </svg>
    </a>            
    <h1 class="text-xl md:text-3xl text-black font-bold mb-1 p-1">Riwayat KHS</h1>
</div>

@if (session()->has('success'))
    {{-- INI BUAT POP UP KETIKA KLIK BUAT (MODAL) --}}
    <input type="checkbox" id="my_modal_7" class="modal-toggle" checked />
    <div class="modal bg-gray-800 text-white" role="dialog">
        <div class="modal-box bg-gray-700">
            <div class="flex items-center justify-center text-green-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="text-[#059669] mx-auto h-11 rounded-full bg-[#D1FAE5] w-11" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <p class="py-4 text-center text-2xl">{{ session('success') }}</p>
        </div>
        <label class="modal-backdrop" for="my_modal_7">Close</label>
    </div>
@endif

<div class="grid grid-cols-5 gap-4 p-4">
    <div class="place-self-center col-start-3 px-5 w-auto h-auto font-bold text-white bg-gray-500 rounded-full">
        <a href="/buat/khs">Input KHS</a>
    </div>
</div>
<div class="grid grid-cols-5 grid-rows-3 gap-4">
    <section class="container px-4 mx-auto row-span-3 row-start-1 row-end-3 col-span-3">
        <div class="flex flex-col">
            <div class="mx-4 my-2 sm:-mx-6 lg:-mx-8 ">
                <div class="inline-block min-w-full py-5 align-middle md:px-6 lg:px-7">
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
                                        <span>Status Berkas</span>
                                        </div>
                                    </th> 
 
                                </tr>
                            </thead>
                            

                            <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">

                                @foreach ($khsList as $khs)
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                        <span>{{ $khs->semester }}</span>
                                    </td>
                                    
    
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="flex items-center gap-x-2">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800 dark:text-white ">{{ $khs->ips }}</h2>
                                            </div>
                                        </div>
                                    </td>
    
                                    <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                        <div class="flex items-center ">
                                            <div>
                                                <h2 class="text-sm font-medium text-gray-800 dark:text-white">{{ $khs->sks_semester }}</h2>
                                            </div>
                                        </div>
                                    </td>

                                    @if ($khs->status == 1)
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-yellow-500 bg-yellow-100/60 dark:bg-gray-800">
    
                                            <h2 class="text-sm font-normal">Menunggu persetujuan</h2>
                                        </div>
                                    </td>

                                    @elseif ($khs->status == 2)
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 3L4.5 8.5L2 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
    
                                            <h2 class="text-sm font-normal">Disetujui</h2>
                                        </div>
                                    </td>

                                    @elseif ($khs->status == 3)
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                        <div class="inline-flex items-center px-3 py-1 text-red-500 rounded-full gap-x-2 bg-red-100/60 dark:bg-gray-800">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M9 3L3 9M3 3L9 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
    
                                            <h2 class="text-sm font-normal">Ditolak</h2>
                                        </div>
                                    </td>
                                    @endif
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-center p-20 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group row-start-1 row-span-2 row-end-3 col-span-2 col-start-4">
        <div class="text-center">
            <img src="{{ auth()->user()->avatar ? asset('storage/' . auth()->user()->avatar) : 'https://i.ibb.co/P6QfJFc/default-avatar-small.jpg' }}" alt="Profile Picture" class="rounded-full w-32 h-32 mx-auto mb-4">
            <h2 class="text-2xl font-bold">{{ $loggedInAccount->value('nama') }}</h2>
            <p class="text-gray-400">{{ $loggedInAccount->value('nim') }}</p>
            <p class="text-gray-400">Departemen Informatika</p>
            <p class="text-gray-400">Fakultas Sains dan Matematik</p>
        </div>
    </div>
    <div class="row-start-3 col-start-4 bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-center p-20 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <div class="flex justify-center">
            <div class="text-center">
                <p class="text-5xl justify-center text-center">{{ number_format($ipk, 2, '.', ',') ?? '0.00' }}</p>
                <p>IPK</p>
            </div>
        </div>
    </div>
    <div class="row-start-3 col-start-5 bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-center p-20 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
        <div class="flex justify-center">
            <div class="text-center">
                <p class="text-5xl justify-center text-center">{{ $sksk ?? '0' }}</p>
                <p>SKSK</p>
            </div>
        </div>
    </div>
</div>



@endsection