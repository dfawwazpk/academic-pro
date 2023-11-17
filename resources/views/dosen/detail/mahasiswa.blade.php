@extends('partials.sidebar')

@section('container')
    <h1 class="text-2xl md:text-3xl text-black font-bold mb-1 p-4">Detail Mahasiswa</h1>

    <div class="grid grid-cols-1 sm:grid-cols-1 p-4 gap-4">
        <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md p-10 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group col-span-4">
            <div class="grid grid-cols-2"> 
                <div>
                    <h1 class="text-white mb-2">NIM             :</h1>
                    <h1 class="text-white mb-2">Nama Lengkap    :</h1>
                    <h1 class="text-white mb-2">Alamat          :</h1>
                    <h1 class="text-white mb-2">Kabupaten/Kota  :</h1>
                    <h1 class="text-white mb-2">Provinsi        :</h1>
                    <h1 class="text-white mb-2">Angkatan        :</h1>
                    <h1 class="text-white mb-2">Jalur Masuk     :</h1>
                    <h1 class="text-white mb-2">Email           :</h1>
                    <h1 class="text-white mb-2">No Hp           :</h1>
                </div>
                <div class="flex justify-end avatar">
                    <div class="rounded-full">
                        <img src="https://cdn.myanimelist.net/r/84x124/images/characters/13/473602.webp?s=b5dfb7a4d02e6da91b0ae862c474e734" alt="kubo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-2 p-4 gap-2">
        <div class="grid grid-cols-3 gap-1">
            <button class="btn btn-neutral">1</button>
            <button class="btn btn-neutral">2</button>
            <button class="btn btn-neutral">3</button>
            <button class="btn btn-neutral">4</button>
            <button class="btn btn-neutral">5</button>
            <button class="btn btn-neutral">6</button>
            <button class="btn btn-neutral">7</button>
            <button class="btn btn-neutral">8</button>
            <button class="btn btn-neutral">9</button>
            <button class="btn btn-neutral">10</button>
            <button class="btn btn-neutral">11</button>
            <button class="btn btn-neutral">12</button>
            <button class="btn btn-neutral">13</button>
            <button class="btn btn-neutral">14</button>
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
