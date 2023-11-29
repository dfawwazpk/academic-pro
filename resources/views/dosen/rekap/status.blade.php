@extends('partials.sidebar')

@section('container')
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
                <a href="/rekap/pkl/0/0" class="btn btn-xs btn-neutral rounded-full">Rekap PKL</a>
                <a href="/rekap/skripsi/0/0"class="btn btn-xs btn-neutral rounded-full">Rekap Skripsi</a>
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
                            
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                            <tr>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <span>2016</span>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/rekap/status/2016/aktif"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2016)->where('status', 1)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
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
                            <tr>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <span>2017</span>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/rekap/status/2017/aktif"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2017)->where('status', 1)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
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
                            <tr>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <span>2018</span>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/rekap/status/2018/aktif"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 1)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/rekap/status/2018/nonaktif"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 2)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/rekap/status/2018/cuti"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2018)->where('status', 3)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <span>2019</span>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/rekap/status/2019/aktif"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 1)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/rekap/status/2019/nonaktif"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 2)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/rekap/status/2019/cuti"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2019)->where('status', 3)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <span>2020</span>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/rekap/status/2020/aktif"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 1)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/rekap/status/2020/nonaktif"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 2)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/rekap/status/2020/cuti"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2020)->where('status', 3)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <span>2021</span>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/rekap/status/2021/aktif"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 1)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/rekap/status/2021/nonaktif"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 2)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/rekap/status/2021/cuti"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2021)->where('status', 3)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <span>2022</span>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/rekap/status/2022/aktif"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 1)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/rekap/status/2022/nonaktif"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 2)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/rekap/status/2022/cuti"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2022)->where('status', 3)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                            </tr>
                            <tr>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <span>2023</span>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/rekap/status/2023/aktif"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 1)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/rekap/status/2023/nonaktif"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 2)->count() }}</span>
                                        </a>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <a href="/rekap/status/2023/cuti"class="flex items-center">
                                            <span>{{ $mahasiswaList->where('angkatan', 2023)->where('status', 3)->count() }}</span>
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
                                        <span>No</span>
                                    </div>
                                </th>
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
                                <tr>
                                    <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <span>{{ $counter++ }}</span>
                                        </div>
                                    </td>
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
                            <td colspan="5" class="px-4 py-4 text-sm font-normal text-gray-700 dark:text-gray-200 whitespace-nowrap" style="text-align: center;">
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
</section>
@endsection