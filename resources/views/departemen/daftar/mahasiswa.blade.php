@extends('partials.sidebar')

@section('container')
<div class="flex items-center mt-6 p-2">
    <a href="/dashboard" class="inline-block">
        <svg class="w-5 h-5 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13"/>
        </svg>
    </a>            
    <h1 class="text-xl md:text-3xl text-black font-bold mb-1 p-1">Daftar Mahasiswa</h1>
  </div>


<form action="/departemen/daftar/mahasiswa">
    <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-5 p-4 gap-4">
        <div class="mb-2 col-span-5 flex items-center">

            <div class="w-1/2">
                <input type="text" name="search" class="border rounded-full w-full py-2 px-4 text-black" id="nim" placeholder="Cari NIM/Nama" value="{{ request('search') }}">
            </div>

            <div class="w-1/2 ml-4">
                <select id="angkatan" name="angkatan" class="border rounded-full w-full py-2 px-3 text-black" onchange="this.form.submit()">
                    <option value="" {{ request('angkatan')=='' ? 'selected' : ''}}>Semua Angkatan</option>
                    <option value="2023" {{ request('angkatan')=='2023' ? 'selected' : ''}}>2023</option>
                    <option value="2022" {{ request('angkatan')=='2022' ? 'selected' : ''}}>2022</option>
                    <option value="2021" {{ request('angkatan')=='2021' ? 'selected' : ''}}>2021</option>
                    <option value="2020" {{ request('angkatan')=='2020' ? 'selected' : ''}}>2020</option>
                    <option value="2019" {{ request('angkatan')=='2019' ? 'selected' : ''}}>2019</option>
                    <option value="2018" {{ request('angkatan')=='2018' ? 'selected' : ''}}>2018</option>
                    <option value="2017" {{ request('angkatan')=='2017' ? 'selected' : ''}}>2017</option>
                    <option value="2016" {{ request('angkatan')=='2016' ? 'selected' : ''}}>2016</option>
                </select>
            </div>

            <div class="w-1/2 ml-4">
                <select id="status" name="status" class="border rounded-full w-full py-2 px-3 text-black" onchange="this.form.submit()">
                    <option value="" {{ request('status')=='' ? 'selected' : ''}}>Semua Status</option>
                    <option value="1" {{ request('status')=='1' ? 'selected' : ''}}>Aktif</option>
                    <option value="2" {{ request('status')=='2' ? 'selected' : ''}}>Cuti</option>
                    <option value="3" {{ request('status')=='3' ? 'selected' : ''}}>Mangkir</option>
                    <option value="4" {{ request('status')=='4' ? 'selected' : ''}}>DO</option>
                    <option value="5" {{ request('status')=='5' ? 'selected' : ''}}>Undur Diri</option>
                    <option value="6" {{ request('status')=='6' ? 'selected' : ''}}>Lulus</option>
                    <option value="7" {{ request('status')=='7' ? 'selected' : ''}}>Meninggal Dunia</option>
                </select>
            </div>

            <div class="w-1/2 ml-4">
                <select id="jalur_masuk" name="jalur_masuk" class="border rounded-full w-full py-2 px-3 text-black" onchange="this.form.submit()">
                    <option value="" {{ request('jalur_masuk')=='' ? 'selected' : ''}}>Semua Jalur Masuk</option>
                    <option value="1" {{ request('jalur_masuk')=='1' ? 'selected' : ''}}>SNBP</option>
                    <option value="2" {{ request('jalur_masuk')=='2' ? 'selected' : ''}}>SNBT</option>
                    <option value="3" {{ request('jalur_masuk')=='3' ? 'selected' : ''}}>Mandiri</option>
                </select>
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
                                    <div class="flex items-center gap-x-3 ml-2">
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
                                        <span>Jalur Masuk</span>
                                    </div>
                                </th> 

                            </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">

                        @foreach ($mahasiswaList as $mahasiswa)
                        <tr>

                            <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                <div class="inline-flex items-center gap-x-3">
                                    <span>{{ $mahasiswa->nim }}</span>
                                </div>
                            </td>

                            <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                <div class="flex items-center gap-x-2">
                                    <div>
                                        <h2 class="text-sm font-medium text-gray-800 dark:text-white ">{{ $mahasiswa->nama }}</h2>
                                    </div>
                                </div>
                            </td>

                            <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                <div class="flex items-center ">
                                    <div>
                                        <h2 class="text-sm font-medium text-gray-800 dark:text-white">{{ $mahasiswa->angkatan }}</h2>
                                    </div>
                                </div>
                            </td>
                            
                            <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                <div class="flex items-center ">
                                    <div>
                                        <h2 class="text-sm font-medium text-gray-800 dark:text-white">{{ $irsList->where('mahasiswa_id', $mahasiswa->id)->take(1)->value('semester') ?? 1 }}</h2>
                                    </div>
                                </div>
                            </td>


                            @if ($mahasiswa->status == 1)
                            <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                                    <h2 class="text-sm font-normal">Aktif</h2>
                                </div>
                            </td>

                            @elseif ($mahasiswa->status == 2)
                            <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-yellow-500 bg-yellow-100/60 dark:bg-gray-800">
                                    <h2 class="text-sm font-normal">Cuti</h2>
                                </div>
                            </td>
                            @elseif ($mahasiswa->status == 3)
                            <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-yellow-500 bg-yellow-100/60 dark:bg-gray-800">
                                    <h2 class="text-sm font-normal">Mangkir</h2>
                                </div>
                            </td>
                            @elseif ($mahasiswa->status == 4)
                            <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-red-500 bg-red-100/60 dark:bg-gray-800">
                                    <h2 class="text-sm font-normal">DO</h2>
                                </div>
                            </td>
                            @elseif ($mahasiswa->status == 5)
                            <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-red-500 bg-red-100/60 dark:bg-gray-800">
                                    <h2 class="text-sm font-normal">Undur Diri</h2>
                                </div>
                            </td>
                            @elseif ($mahasiswa->status == 6)
                            <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60  dark:bg-gray-800">
                                    <h2 class="text-sm font-normal">Lulus</h2>
                                </div>
                            </td>
                            @elseif ($mahasiswa->status == 7)
                            <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-red-500 bg-red-100/60 dark:bg-gray-800">
                                    <h2 class="text-sm font-normal">Meninggal Dunia</h2>
                                </div>
                            </td>
                            @endif

                            <td class="px-4 py-4 text-sm whitespace-nowrap">
                                <div class="flex items-center gap-x-6">
                                    <div>
                                        <h2 class="text-sm font-medium text-gray-800 dark:text-white ">{{ $jalurMasukList->where('id', $mahasiswa->jalur_masuk)->value('name') }}</h2>
                                    </div>
                                </div>
                            </td>

                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
