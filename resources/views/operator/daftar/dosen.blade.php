@extends('partials.sidebar')

@section('container')
<div class="relative bg-indigo-200 dark:bg-indigo-500 p-7 sm:p-7 rounded-sm overflow-hidden mb-10 mt-10">
    <h1 class="text-2xl md:text-3xl text-slate-800 dark:text-slate-100 font-bold mb-1">Daftar Dosen {{-- {{ Auth::user()->name }} --}} </h1>
    
</div>

<div class="flex justify-end p-4 gap-4">
    <a href="/buat/dosen" class="btn btn-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-full gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
        <span class="">Tambah Akun</span>
    </a>
</div>

{{-- <div class="grid grid-cols-2 p-4 gap-4">
    <div class="col-start-2">
        <div class="grid grid-cols-3">
            <div class="col-start-2">
                <button class="btn btn-sm text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-full gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                    <span>Hapus Akun</span>
                </button>
            </div>
            <div class="col-start-3">
                <a href="/buat/dosen" class="btn btn-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-full gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                    <span class="">Tambah Akun</span>
                </a>
            </div>
        </div>
    </div>
</div> --}}

{{-- Nav Diatas Tabel --}}
<form action="/daftar/dosen">
    <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-5 p-4 gap-4">
        <div class="mb-2 col-span-5 flex items-center">
            <div class="w-full">
                <input type="text" name="search" class="border rounded w-full py-2 px-4 text-black" id="search" placeholder="Cari NIP/Nama" value="{{ request('search') }}">
            </div>
        </div>
    </div>
</form>

<section class="container px-4 mx-auto">
    <div class="flex flex-col col-span-3">
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
                                        </button>
                                    </div>
                                </th>
                                <th scope="col" class="px-3.5 py-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400 flex items-center" col-span="2">
                                    <div class= "flex items-center gap-x-2">
                                    <span>Nama</span>
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

                            @foreach ($dosenList as $dosen)
                            <tr>

                                <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                        <div class="inline-flex items-center gap-x-3">
                                            <input type="checkbox" class="text-blue-500 border-gray-300 rounded dark:bg-gray-900 dark:ring-offset-gray-900 dark:border-gray-700">

                                            <span>{{ $dosen->nip }}</span>
                                        </div>
                                    </td>

                                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                                    <div class="flex items-center gap-x-2">
                                        <div>
                                            <h2 class="text-sm font-medium text-gray-800 dark:text-white ">{{ $dosen->nama }}</h2>
                                        </div>
                                    </div>
                                </td>
                                {{-- Ini Hapus Aken Dosen tapi masi refer ke dosen id blm ke user id --}}
                                <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                    <div class="inline-flex items-center gap-x-3">
                                        <form id="deleteForm_{{ $dosen->id }}" action="{{ route('delete.dosen', $dosen->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                        </form>
                                

                                        <button type="button" onclick="confirmDelete('{{ $dosen->id }}')" class="btn btn-sm text-sm text-red-500 hover:text-red-700 capitalize transition-colors duration-200 bg-white border rounded-full gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                                            <span>Hapus Akun</span>
                                        </button>
                                    </div>
                                {{-- Styling Backup 
                                    
                                    <a href ="/verifikasi/irs/tolak/{{ $irs->id }}" class="px-4 py-4 text-sm font-medium text-gray-700 bg-gray-500 hover:bg-red-600 rounded-full whitespace-nowrap" style="width: 100px;">
                                        <div class="inline-flex items-center gap-x-2">
                                            <h2 class="text-sm font-normal text-emerald-100">Tolak</h2>
                                        </div>
                                    </a> --}}
                                
                                    <script>
                                        function confirmDelete(id) {
                                            if (confirm('Apakah Anda yakin ingin menghapus akun ini?')) {
                                                document.getElementById('deleteForm_' + id).submit();
                                            }
                                        }
                                    </script>
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
