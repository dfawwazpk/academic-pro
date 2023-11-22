@extends('partials.sidebar')

@section('container')
    <h1 class="text-2xl md:text-3xl text-black font-bold mb-1 p-4">Detail Mahasiswa</h1>

    <div class="grid grid-cols-1 sm:grid-cols-1 p-4 gap-4 mt-4 mb-4">
        <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md p-10 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group col-span-4">
            <div class="grid grid-cols-2"> 
                <div>
                    <h1 class="text-white mb-2">NIM             : {{ $mahasiswa->nim }}</h1>
                    <h1 class="text-white mb-2">Nama Lengkap    : {{ $mahasiswa->nama }}</h1>
                    <h1 class="text-white mb-2">Alamat          : {{ $mahasiswa->alamat }}</h1>
                    <h1 class="text-white mb-2">Kabupaten/Kota  : {{ $kabupatenKota->where('kode_kab', $mahasiswa->kabupaten_kota)->value('nama_kab') }}</h1>
                    <h1 class="text-white mb-2">Provinsi        : {{ $provinsi->where('kode_prov', $mahasiswa->provinsi)->value('nama_prov') }}</h1>
                    <h1 class="text-white mb-2">Angkatan        : {{ $mahasiswa->angkatan }}</h1>
                    <h1 class="text-white mb-2">Jalur Masuk     : {{ $jalurMasuk->where('id', $mahasiswa->status)->value('name') }}</h1>
                    <h1 class="text-white mb-2">Email           : {{ $akunMahasiswa->email }}</h1>
                    <h1 class="text-white mb-2">No Hp           : {{ $mahasiswa->no_hp }}</h1>
                </div>
                <div class="col-start-2 flex justify-end items-center mr-20 avatar">
                    <div class="rounded-full w-60 h-60">
                        <img src="{{ $akunMahasiswa->avatar ? asset('storage/' . $akunMahasiswa->avatar) : 'https://i.ibb.co/P6QfJFc/default-avatar-small.jpg' }}" alt="Profile Picture">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-2 p-4 gap-2">
        <div class="grid grid-cols-3 gap-1">
            <button class="btn btn-neutral {{ $skripsiList->where('semester', 1)->count() > 0 ? 'bg-green-500' : '' }} {{ $pklList->where('semester', 1)->count() > 0 ? 'bg-yellow-500' : '' }} {{ $khsList->where('semester', 1)->count() > 0 ? 'bg-blue-600' : '' }} {{ $irsList->where('semester', 1)->count() > 0 ? 'bg-blue-400' : '' }} bg-red-500">1</button>
            <button class="btn btn-neutral {{ $skripsiList->where('semester', 2)->count() > 0 ? 'bg-green-500' : '' }} {{ $pklList->where('semester', 2)->count() > 0 ? 'bg-yellow-500' : '' }} {{ $khsList->where('semester', 2)->count() > 0 ? 'bg-blue-600' : '' }} {{ $irsList->where('semester', 2)->count() > 0 ? 'bg-blue-400' : '' }} bg-red-500">2</button>
            <button class="btn btn-neutral {{ $skripsiList->where('semester', 3)->count() > 0 ? 'bg-green-500' : '' }} {{ $pklList->where('semester', 3)->count() > 0 ? 'bg-yellow-500' : '' }} {{ $khsList->where('semester', 3)->count() > 0 ? 'bg-blue-600' : '' }} {{ $irsList->where('semester', 3)->count() > 0 ? 'bg-blue-400' : '' }} bg-red-500">3</button>
            <button class="btn btn-neutral {{ $skripsiList->where('semester', 4)->count() > 0 ? 'bg-green-500' : '' }} {{ $pklList->where('semester', 4)->count() > 0 ? 'bg-yellow-500' : '' }} {{ $khsList->where('semester', 4)->count() > 0 ? 'bg-blue-600' : '' }} {{ $irsList->where('semester', 4)->count() > 0 ? 'bg-blue-400' : '' }} bg-red-500">4</button>
            <button class="btn btn-neutral {{ $skripsiList->where('semester', 5)->count() > 0 ? 'bg-green-500' : '' }} {{ $pklList->where('semester', 5)->count() > 0 ? 'bg-yellow-500' : '' }} {{ $khsList->where('semester', 5)->count() > 0 ? 'bg-blue-600' : '' }} {{ $irsList->where('semester', 5)->count() > 0 ? 'bg-blue-400' : '' }} bg-red-500">5</button>
            <button class="btn btn-neutral {{ $skripsiList->where('semester', 6)->count() > 0 ? 'bg-green-500' : '' }} {{ $pklList->where('semester', 6)->count() > 0 ? 'bg-yellow-500' : '' }} {{ $khsList->where('semester', 6)->count() > 0 ? 'bg-blue-600' : '' }} {{ $irsList->where('semester', 6)->count() > 0 ? 'bg-blue-400' : '' }} bg-red-500">6</button>
            <button class="btn btn-neutral {{ $skripsiList->where('semester', 7)->count() > 0 ? 'bg-green-500' : '' }} {{ $pklList->where('semester', 7)->count() > 0 ? 'bg-yellow-500' : '' }} {{ $khsList->where('semester', 7)->count() > 0 ? 'bg-blue-600' : '' }} {{ $irsList->where('semester', 7)->count() > 0 ? 'bg-blue-400' : '' }} bg-red-500">7</button>
            <button class="btn btn-neutral {{ $skripsiList->where('semester', 8)->count() > 0 ? 'bg-green-500' : '' }} {{ $pklList->where('semester', 8)->count() > 0 ? 'bg-yellow-500' : '' }} {{ $khsList->where('semester', 8)->count() > 0 ? 'bg-blue-600' : '' }} {{ $irsList->where('semester', 8)->count() > 0 ? 'bg-blue-400' : '' }} bg-red-500">8</button>
            <button class="btn btn-neutral {{ $skripsiList->where('semester', 9)->count() > 0 ? 'bg-green-500' : '' }} {{ $pklList->where('semester', 9)->count() > 0 ? 'bg-yellow-500' : '' }} {{ $khsList->where('semester', 9)->count() > 0 ? 'bg-blue-600' : '' }} {{ $irsList->where('semester', 9)->count() > 0 ? 'bg-blue-400' : '' }} bg-red-500">9</button>
            <button class="btn btn-neutral {{ $skripsiList->where('semester', 10)->count() > 0 ? 'bg-green-500' : '' }} {{ $pklList->where('semester', 10)->count() > 0 ? 'bg-yellow-500' : '' }} {{ $khsList->where('semester', 10)->count() > 0 ? 'bg-blue-600' : '' }} {{ $irsList->where('semester', 10)->count() > 0 ? 'bg-blue-400' : '' }} bg-red-500">10</button>
            <button class="btn btn-neutral {{ $skripsiList->where('semester', 11)->count() > 0 ? 'bg-green-500' : '' }} {{ $pklList->where('semester', 11)->count() > 0 ? 'bg-yellow-500' : '' }} {{ $khsList->where('semester', 11)->count() > 0 ? 'bg-blue-600' : '' }} {{ $irsList->where('semester', 11)->count() > 0 ? 'bg-blue-400' : '' }} bg-red-500">11</button>
            <button class="btn btn-neutral {{ $skripsiList->where('semester', 12)->count() > 0 ? 'bg-green-500' : '' }} {{ $pklList->where('semester', 12)->count() > 0 ? 'bg-yellow-500' : '' }} {{ $khsList->where('semester', 12)->count() > 0 ? 'bg-blue-600' : '' }} {{ $irsList->where('semester', 12)->count() > 0 ? 'bg-blue-400' : '' }} bg-red-500">12</button>
            <button class="btn btn-neutral {{ $skripsiList->where('semester', 13)->count() > 0 ? 'bg-green-500' : '' }} {{ $pklList->where('semester', 13)->count() > 0 ? 'bg-yellow-500' : '' }} {{ $khsList->where('semester', 13)->count() > 0 ? 'bg-blue-600' : '' }} {{ $irsList->where('semester', 13)->count() > 0 ? 'bg-blue-400' : '' }} bg-red-500">13</button>
            <button class="btn btn-neutral {{ $skripsiList->where('semester', 14)->count() > 0 ? 'bg-green-500' : '' }} {{ $pklList->where('semester', 14)->count() > 0 ? 'bg-yellow-500' : '' }} {{ $khsList->where('semester', 14)->count() > 0 ? 'bg-blue-600' : '' }} {{ $irsList->where('semester', 14)->count() > 0 ? 'bg-blue-400' : '' }} bg-red-500">14</button>
        </div>
        <div class="grid grid-cols-2 grid-rows-3 gap-2">
            <div class="col-start-1 row-start-1 bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md p-4 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                <p class="text-xl">IPK</p>
                <p class="text-3xl justify-center text-center">4.0</p>
            </div>
            <div class="col-start-2 row-start-1 bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md p-4 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                <p class="text-xl">SKS</p>
                <p class="text-3xl justify-center text-center">144</p>
            </div>
            <div class="col-span-2 bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md p-4 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                <div class="grid grid-cols-2"> 
                    <div class="row-span-2">
                        <h1 class="font-semibold">PKL</h1>
                        <h2 class="text-4xl font-bold">Lulus</h2>
                    </div>
                    <h1 class="bg-neutral-50 rounded-full mb-2 font-bold text-black text-center flex justify-center items-center w-auto h-8">Nilai : A</h1>
                    <button class="btn btn-sm rounded-full col-start-2">Unduh</button>
                </div>
            </div>
            <div class="col-span-2 bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md p-4 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                <h1 class="font-semibold">Skripsi</h1>
                <h2 class="text-4xl font-bold">Belum Mengambil</h2>
            </div>
        </div>
    </div>
    </div>
@endsection
