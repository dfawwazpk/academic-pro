@extends('partials.sidebar')

@section('container')

<div class="flex items-center mt-6 p-2">
    <a href="/dashboard" class="inline-block">
        <svg class="w-5 h-5 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13"/>
        </svg>
    </a>            
    <h1 class="text-xl md:text-3xl text-black font-bold mb-1 p-1">Rekap Mahasiswa</h1>
</div>

<section class="container px-4 mx-auto">
    
    <div class="flex flex-col items-center p-7 sm:p-20 justify-center">
        <div class="flex items-center mb-4">
            <h1 class="text-2xl md:text-3xl text-black font-bold mb-1 p-1">Rekap Mahasiswa Informatika</h1>
        </div>
        <h1 class="text-2xl md:text-2xl text-black font-bold mb-1">Fakultas Sains dan Matematika</h1>
    </div>
    
    
    <div class="grid grid-cols-4">
        <div class="col-start-4">
            <div class="grid grid-cols-2 gap-2">
                <a href="/departemen/rekap/pkl/0/0" class="btn btn-xs btn-neutral rounded-full">Rekap PKL</a>
                <a href="/departemen/rekap/skripsi/0/0"class="btn btn-xs btn-neutral rounded-full">Rekap Skripsi</a>
            </div>
        </div>
    </div>

    <div class="flex flex-col mt-4">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-7">
                <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th rowspan="2" class="border border-slate-600 text-white">Status</th>
                                <th colspan="8" class="border border-slate-600 text-white">Angkatan</th>
                             
                            </tr>
                            <tr>
                                <td class="border border-slate-600 text-white text-center ">2016</td>
                                <td class="border border-slate-600 text-white text-center ">2017</td>
                                <td class="border border-slate-600 text-white text-center ">2018</td>
                                <td class="border border-slate-600 text-white text-center ">2019</td>
                                <td class="border border-slate-600 text-white text-center ">2020</td>
                                <td class="border border-slate-600 text-white text-center ">2021</td>
                                <td class="border border-slate-600 text-white text-center ">2022</td>
                                <td class="border border-slate-600 text-white text-center ">2023</td>
                            </tr>
                        </thead>
{{-- Backup Table 
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-white">
                                    <div class="flex items-center justify-center gap-x-3">

                                        <button class="flex items-center gap-x-2">
                                            <span>Angkatan</span>
                                        </button>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-white">
                                    <div class="flex items-center justify-center">
                                        <button class="flex items-center">
                                            <span>Aktif</span>
                                        </button>
                                    </div>
                                </th>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-white">
                                    <div class="flex items-center justify-center  gap-x-3">

                                        <button class="flex items-center justify-center gap-x-2">
                                            <span>Nonaktif</span>
                                        </button>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-white">
                                    <div class="flex items-center justify-center">
                                        <button class="flex items-center">
                                            <span>Cuti</span>
                                        </button>
                                    </div>
                                </th>
                            </tr>
                            --}}    
                   

                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                            <tr>
                                <th class="border border-slate-600 py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <span>Aktif</span>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2016/aktif"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 1)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2017/aktif"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 1)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2018/aktif"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 1)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2019/aktif"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 1)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2020/aktif"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 1)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2021/aktif"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 1)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2022/aktif"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 1)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2023/aktif"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 1)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                {{-- Backup 
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/rekap/status/2016/nonaktif"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 2)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/rekap/status/2016/cuti"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 3)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                            </tr>
                            --}}
                            <tr>
                                <th class=" border border-slate-600 py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <span>Cuti</span>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2016/cuti"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 2)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2017/cuti"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 2)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2018/cuti"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 2)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2019/cuti"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 2)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2020/cuti"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 2)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2021/cuti"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 2)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2022/cuti"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 2)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2023/cuti"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 2)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                {{-- Backup 
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/rekap/status/2017/nonaktif"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 2)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/rekap/status/2017/cuti"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 3)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                            </tr>
                            --}}
                            <tr>
                                <th class="border border-slate-600 py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <span>Mangkir</span>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2016/mangkir"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 3)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2017/mangkir"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 3)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2018/mangkir"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 3)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2019/mangkir"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 3)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2020/mangkir"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 3)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2021/mangkir"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 3)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2022/mangkir"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 3)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2023/mangkir"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 3)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                            <tr>
                                <th class="border border-slate-600  py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <span>DO</span>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2016/DO"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 4)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2017/DO"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 4)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2018/DO"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 4)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
    
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2019/DO"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 4)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2020/DO"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 4)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2021/DO"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 4)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2022/DO"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 4)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2023/DO"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 4)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                            </tr>
                            
                            
                            <tr>
                                <th class=" border border-slate-600 py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <span>Undur Diri</span>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2016/undur diri"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 5)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2017/undur diri"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 5)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2018/undur diri"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 5)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2019/undur diri"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 5)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2020/undur diri"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 5)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2021/undur diri"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 5)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2022/undur diri"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 5)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2023/undur diri"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 5)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th class=" border border-slate-600 py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <span>Lulus</span>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2016/lulus"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 6)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2017/lulus"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 6)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2018/lulus"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 6)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2019/lulus"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 6)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2020/lulus"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 6)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2021/lulus"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 6)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2022/lulus"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 6)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2023/lulus"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 6)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th class=" border border-slate-600 py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <span>Meninggal Dunia</span>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2016/meninggal dunia"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 67)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2017/meninggal dunia"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 7)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2018/meninggal dunia"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 7)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2019/meninggal dunia"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 7)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2020/meninggal dunia"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 7)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2021/meninggal dunia"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 7)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2022/meninggal dunia"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 7)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/departemen/rekap/status/2023/meninggal dunia"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 7)->count() }}</span>
                                        </a>
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


    <div class="grid grid-cols-4 mt-4 mb-4">
        <div class="col-start-4">
            <div class="grid grid-cols-2 gap-2">
                <a href="/departemen/rekap/status/cetak" target="_blank" class="btn btn-xs btn-neutral rounded-full col-start-2">Cetak</a>
            </div>
        </div>
    </div>

</section>

<br>

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
                                        <button class="flex items-center gap-x-2">
                                            <span>NIM</span>
                                        </button>
                                    </div>
                                </th>
                                <th scope="col" class="px-3.5 py-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 flex items-center">
                                    <div class= "flex items-center gap-x-2">
                                        <span>Nama</span>
                                    </div>
                                </th>
                                
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class= "flex items-center gap-x-2">
                                    <span>Angkatan</span>
                                    </div>
                                </th> 
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class= "flex items-center gap-x-2">
                                    <span>Status</span>
                                    </div>
                                </th> 
                            </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                        @if ($mahasiswaListStatus->count() > 0)
                            @foreach ($mahasiswaListStatus as $mahasiswa)
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
                                            <h1>{{ $mahasiswa->angkatan }}</h1>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                    <div class="flex items-center ">
                                        <div>
                                            <h1>{{ $statusMahasiswaList->where('id', $mahasiswa->status)->value('name') }}</h1>
                                        </div>
                                    </div>
                                </td>

                            </tr>
                            @endforeach
                        @elseif ($mahasiswaListStatus->count() == 0)
                        <tr>
                            <td colspan="4" class="px-4 py-4 text-sm font-normal text-gray-700 dark:text-gray-200 whitespace-nowrap" style="text-align: center;">
                                <div class="inline-flex items-center gap-x-3">
                                    <h1>Tidak ada data</h1>  
                                </div>
                            </td>
                        </tr>
                        @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-4 mt-4 mb-4">
        <div class="col-start-4">
            <div class="grid grid-cols-2 gap-2">
                <a href="/departemen/rekap/status/{{ $angkatanSelected }}/{{ $statusSelected }}/cetak" target="_blank" class="btn btn-xs btn-neutral rounded-full col-start-2">Cetak</a>
            </div>
        </div>
    </div>

</section>
@endsection