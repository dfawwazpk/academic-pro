@extends('partials.sidebar')

@section('container')

<div class="flex items-center mt-6 p-2">
    <a href="/dashboard" class="inline-block">
        <svg class="w-5 h-5 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13"/>
        </svg>
    </a>            
    <h1 class="text-xl md:text-3xl text-black font-bold mb-1 p-1">Progress Mahasiswa</h1>
</div>

{{-- Nav Diatas Tabel --}}
<form action="/progress-mahasiswa">
    <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-3 p-4 gap-4">
        <div class="mb-2 col-span-3 flex">

            <div class="w-2/4">
                <input type="text" id="search" name="search" class="border rounded-full w-full py-2 px-4 text-black" placeholder="Cari NIM/Nama" value="{{ request('search') }}">
            </div>

            <div class="w-1/4">
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

            <div class="w-1/4">
                <select id="status" name="status" class="border rounded-full w-full py-2 px-3 text-black" onchange="this.form.submit()">
                    <option value="" {{ request('status')=='' ? 'selected' : ''}}>Semua Status</option>
                    <option value="1" {{ request('status')=='1' ? 'selected' : ''}}>Aktif</option>
                    <option value="2" {{ request('status')=='2' ? 'selected' : ''}}>Nonaktif</option>
                    <option value="3" {{ request('status')=='3' ? 'selected' : ''}}>Cuti</option>
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
                                    <div class="flex items-center gap-x-3">
                                        <span>No</span>
                                    </div>
                                </th>
                                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-righ text-gray-500 dark:text-gray-400">
                                    <div class="flex items-center gap-x-3">
                                        <div class="flex items-center gap-x-2 justify-center">
                                            <span>NIM</span>
                                        </div>
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
                                        <span>{{ $counter++ }}</span>
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                    <div class="inline-flex items-center gap-x-3">
                                        <div  class=" border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">
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
