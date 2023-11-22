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
                <a href="/rekap/pkl2" class="btn btn-xs btn-neutral rounded-full">Rekap PKL</a>
                <a href="/rekap/skripsi2"class="btn btn-xs btn-neutral rounded-full">Rekap Skripsi</a>
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
                                            <span>Aktif</span>
                                        </button>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <button class="flex items-center">
                                            <span>Cuti</span>
                                        </button>
                                    </div>
                                </th>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center  gap-x-3">

                                        <button class="flex items-center justify-center gap-x-2">
                                            <span>Aktif</span>
                                        </button>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <button class="flex items-center">
                                            <span>Cuti</span>
                                        </button>
                                    </div>
                                </th>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center gap-x-3">

                                        <button class="flex items-center gap-x-2">
                                            <span>Aktif</span>
                                        </button>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <button class="flex items-center">
                                            <span>Cuti</span>
                                        </button>
                                    </div>
                                </th>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center gap-x-3">

                                        <button class="flex items-center gap-x-2">
                                            <span>Aktif</span>
                                        </button>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <button class="flex items-center">
                                            <span>Cuti</span>
                                        </button>
                                    </div>
                                </th>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center gap-x-3">

                                        <button class="flex items-center gap-x-2">
                                            <span>Aktif</span>
                                        </button>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <button class="flex items-center">
                                            <span>Cuti</span>
                                        </button>
                                    </div>
                                </th>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center gap-x-3">

                                        <button class="flex items-center gap-x-2">
                                            <span>Aktif</span>
                                        </button>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center">
                                        <button class="flex items-center">
                                            <span>Cuti</span>
                                        </button>
                                    </div>
                                </th>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center justify-center gap-x-3">

                                        <button class="flex items-center gap-x-2">
                                            <span>Aktif</span>
                                        </button>
                                    </div>
                                </th>
                                <th class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
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
                                    <button class="flex items-center">
                                        <span>5</span>
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
@endsection