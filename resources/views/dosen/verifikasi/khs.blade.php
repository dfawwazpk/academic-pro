@extends('partials.sidebar')

@section('container')
<div class="flex items-center mt-6 p-2">
    <a href="/dashboard" class="inline-block">
        <svg class="w-5 h-5 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13"/>
        </svg>
    </a>            
    <h1 class="text-xl md:text-3xl text-black font-bold mb-1 p-1">Verifikasi KHS</h1>
</div>

{{-- Button Atas
<div class="grid grid-cols-2">
    <div class="col-start-2">
        <div class="grid grid-cols-3">
            <button class="btn btn-xs btn-neutral rounded-full">Unduh terpilih</button>
            <button class="btn btn-xs btn-neutral rounded-full">Setujui terpilih</button>
            <button class="btn btn-xs btn-neutral rounded-full">Tolak terpilih</button>
        </div>
    </div>
</div>
--}}
{{-- Nav Diatas Tabel --}}
<div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-3 p-4 gap-4">
    <div class="mb-2 col-span-3 flex">
        <div class="w-3/4">
            <input type="text" name="nim" class="border rounded-full w-full py-2 px-4 text-black @error('nim') is-invalid @else @enderror" id="nim" placeholder="Cari NIM/Nama" value="{{ old('nim') }}">
            @error('nim')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="w-1/4">
            <select id="angkatan" name="angkatan" class="border rounded-full w-full py-2 px-3 text-black @error('angkatan') @else is-invalid @enderror" value="{{ old('angkatan') }}">
                <option value="" selected disabled>Semester</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
            </select>
            @error('angkatan')
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
                                        <span>No</span>
                                    </div>
                                </th>
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
                                    <span>Semester</span>
                                    </div>
                                </th> 
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class= "flex items-center gap-x-2">
                                    <span>Berkas</span>
                                    </div>
                                </th> 
                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    <div class= "flex items-center gap-x-2">
                                    <span>Aksi</span>
                                    </div>
                                </th> 
                            </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                        
                        @foreach ($mahasiswaList as $mahasiswa)
                            @foreach ($khsList->where('mahasiswa_id', $mahasiswa->id) as $khs)
                            <tr>
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                    <div class="inline-flex items-center gap-x-3">
                                        <span>{{ $counter++ }}</span>
                                    </div>
                                </td>
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
                                            <h2 class="text-sm font-medium text-gray-800 dark:text-white">{{ $khs->semester }}</h2>
                                        </div>
                                    </div>
                                </td>

                                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                                    <a href ="{{ asset('storage/' . $khs->file) }}" class="px-4 py-4 text-sm font-medium text-gray-700 bg-gray-500 hover:bg-emerald-600 rounded-full whitespace-nowrap" style="width: 100px;">
                                        <div class="inline-flex items-center gap-x-2">
                                            <h2 class="text-sm font-normal text-emerald-100">Unduh</h2>
                                        </div>
                                    </a>
                                </td>

                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    
                                    <a href ="/verifikasi/khs/setujui/{{ $khs->id }}" class="px-4 py-4 text-sm font-medium text-gray-700 bg-gray-500 hover:bg-emerald-600 rounded-full whitespace-nowrap" style="width: 100px;">
                                        <div class="inline-flex items-center gap-x-2">
                                            <h2 class="text-sm font-normal text-emerald-100">Setujui</h2>
                                        </div>
                                    </a>

                                    <a href ="/verifikasi/khs/tolak/{{ $khs->id }}" class="px-4 py-4 text-sm font-medium text-gray-700 bg-gray-500 hover:bg-red-600 rounded-full whitespace-nowrap" style="width: 100px;">
                                        <div class="inline-flex items-center gap-x-2">
                                            <h2 class="text-sm font-normal text-emerald-100">Tolak</h2>
                                        </div>
                                    </a>

                                </td>
                            </tr>
                            @endforeach
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</section>
@endsection
