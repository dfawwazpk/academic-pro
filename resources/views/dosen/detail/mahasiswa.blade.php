@extends('partials.sidebar')

@section('container')
<div class="flex items-center mt-6 p-2">
    <a href="/progress-mahasiswa" class="inline-block">
        <svg class="w-5 h-5 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13"/>
        </svg>
    </a>            
    <h1 class="text-xl md:text-3xl text-black font-bold mb-1 p-1">Progress Mahasiswa</h1>
</div>
    <div class="grid grid-cols-1 sm:grid-cols-1 p-4 gap-4 -mb-4">
        <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md p-10 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group col-span-4">
            <div class="grid grid-cols-2">
                <div>
                    <table>
                        <tr>
                            <td><h1 class="text-white mb-2">NIM</h1></td>
                            <td><h1 class="text-white mb-2"> : {{ $mahasiswa->nim }}</h1></td>
                        </tr>
                        <tr>
                            <td><h1 class="text-white mb-2">Nama Lengkap</h1></td>
                            <td><h1 class="text-white mb-2"> : {{ $mahasiswa->nama }}</h1></td>
                        </tr>
                        <tr>
                            <td><h1 class="text-white mb-2">Alamat</h1></td>
                            <td><h1 class="text-white mb-2"> : {{ $mahasiswa->alamat }}</h1></td>
                        </tr>
                        <tr>
                            <td><h1 class="text-white mb-2">Kabupaten/Kota</h1></td>
                            <td><h1 class="text-white mb-2"> : {{ $kabupatenKota->where('kode_kab', $mahasiswa->kabupaten_kota)->value('nama_kab') }}</h1></td>
                        </tr>
                        <tr>
                            <td><h1 class="text-white mb-2">Provinsi</h1></td>
                            <td><h1 class="text-white mb-2"> : {{ $provinsi->where('kode_prov', $mahasiswa->provinsi)->value('nama_prov') }}</h1></td>
                        </tr>
                        <tr>
                            <td><h1 class="text-white mb-2">Angkatan</h1></td>
                            <td><h1 class="text-white mb-2"> : {{ $mahasiswa->angkatan }}</h1></td>
                        </tr>
                        <tr>
                            <td><h1 class="text-white mb-2">Jalur Masuk</h1></td>
                            <td><h1 class="text-white mb-2"> : {{ $jalurMasuk->where('id', $mahasiswa->status)->value('name') }}</h1></td>
                        </tr>
                        <tr>
                            <td><h1 class="text-white mb-2">Email</h1></td>
                            <td><h1 class="text-white mb-2"> : {{ $akunMahasiswa->email }}</h1></td>
                        </tr>
                        <tr>
                            <td><h1 class="text-white mb-2">No Hp</h1></td>
                            <td><h1 class="text-white mb-2"> : {{ $mahasiswa->no_hp }}</h1></td>
                        </tr>
                        <!-- Tambahkan baris-baris tabel untuk alamat, kabupaten/kota, provinsi, angkatan, jalur masuk, email, dan no hp -->
                    </table>
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
        <div class="grid col-start-1 grid-cols-6 h-[400px] gap-3 text-3xl" id="semesterButton">
            <button id="1" class="hover:bg-black text-white font-bold rounded-lg shadow-md col-start-1 col-end-3 h-[75px] {{ $skripsiList->where('semester', 1)->count() > 0 ? 'bg-green-500' : ($pklList->where('semester', 1)->count() > 0 ? 'bg-yellow-500' : ($khsList->where('semester', 1)->count() > 0 ? 'bg-blue-600' : ($irsList->where('semester', 1)->count() > 0 ? 'bg-blue-400' : 'bg-red-500'))) }}">1</button>
            <button id="2" class="hover:bg-black text-white font-bold rounded-lg shadow-md col-start-3 col-end-5 h-[75px] {{ $skripsiList->where('semester', 2)->count() > 0 ? 'bg-green-500' : ($pklList->where('semester', 2)->count() > 0 ? 'bg-yellow-500' : ($khsList->where('semester', 2)->count() > 0 ? 'bg-blue-600' : ($irsList->where('semester', 2)->count() > 0 ? 'bg-blue-400' : 'bg-red-500'))) }}">2</button>
            <button id="3" class="hover:bg-black text-white font-bold rounded-lg shadow-md col-start-5 col-end-7 h-[75px] {{ $skripsiList->where('semester', 3)->count() > 0 ? 'bg-green-500' : ($pklList->where('semester', 3)->count() > 0 ? 'bg-yellow-500' : ($khsList->where('semester', 3)->count() > 0 ? 'bg-blue-600' : ($irsList->where('semester', 3)->count() > 0 ? 'bg-blue-400' : 'bg-red-500'))) }}">3</button>
            <button id="4" class="hover:bg-black text-white font-bold rounded-lg shadow-md col-start-1 col-end-3 h-[75px] {{ $skripsiList->where('semester', 4)->count() > 0 ? 'bg-green-500' : ($pklList->where('semester', 4)->count() > 0 ? 'bg-yellow-500' : ($khsList->where('semester', 4)->count() > 0 ? 'bg-blue-600' : ($irsList->where('semester', 4)->count() > 0 ? 'bg-blue-400' : 'bg-red-500'))) }}">4</button>
            <button id="5" class="hover:bg-black text-white font-bold rounded-lg shadow-md col-start-3 col-end-5 h-[75px] {{ $skripsiList->where('semester', 5)->count() > 0 ? 'bg-green-500' : ($pklList->where('semester', 5)->count() > 0 ? 'bg-yellow-500' : ($khsList->where('semester', 5)->count() > 0 ? 'bg-blue-600' : ($irsList->where('semester', 5)->count() > 0 ? 'bg-blue-400' : 'bg-red-500'))) }}">5</button>
            <button id="6" class="hover:bg-black text-white font-bold rounded-lg shadow-md col-start-5 col-end-7 h-[75px] {{ $skripsiList->where('semester', 6)->count() > 0 ? 'bg-green-500' : ($pklList->where('semester', 6)->count() > 0 ? 'bg-yellow-500' : ($khsList->where('semester', 6)->count() > 0 ? 'bg-blue-600' : ($irsList->where('semester', 6)->count() > 0 ? 'bg-blue-400' : 'bg-red-500'))) }}">6</button>
            <button id="7" class="hover:bg-black text-white font-bold rounded-lg shadow-md col-start-1 col-end-3 h-[75px] {{ $skripsiList->where('semester', 7)->count() > 0 ? 'bg-green-500' : ($pklList->where('semester', 7)->count() > 0 ? 'bg-yellow-500' : ($khsList->where('semester', 7)->count() > 0 ? 'bg-blue-600' : ($irsList->where('semester', 7)->count() > 0 ? 'bg-blue-400' : 'bg-red-500'))) }}">7</button>
            <button id="8" class="hover:bg-black text-white font-bold rounded-lg shadow-md col-start-3 col-end-5 h-[75px] {{ $skripsiList->where('semester', 8)->count() > 0 ? 'bg-green-500' : ($pklList->where('semester', 8)->count() > 0 ? 'bg-yellow-500' : ($khsList->where('semester', 8)->count() > 0 ? 'bg-blue-600' : ($irsList->where('semester', 8)->count() > 0 ? 'bg-blue-400' : 'bg-red-500'))) }}">8</button>
            <button id="9" class="hover:bg-black text-white font-bold rounded-lg shadow-md col-start-5 col-end-7 h-[75px] {{ $skripsiList->where('semester', 9)->count() > 0 ? 'bg-green-500' : ($pklList->where('semester', 9)->count() > 0 ? 'bg-yellow-500' : ($khsList->where('semester', 9)->count() > 0 ? 'bg-blue-600' : ($irsList->where('semester', 9)->count() > 0 ? 'bg-blue-400' : 'bg-red-500'))) }}">9</button>
            <button id="10" class="hover:bg-black text-white font-bold rounded-lg shadow-md col-start-1 col-end-3 h-[75px] {{ $skripsiList->where('semester', 10)->count() > 0 ? 'bg-green-500' : ($pklList->where('semester', 10)->count() > 0 ? 'bg-yellow-500' : ($khsList->where('semester', 10)->count() > 0 ? 'bg-blue-600' : ($irsList->where('semester', 10)->count() > 0 ? 'bg-blue-400' : 'bg-red-500'))) }}">10</button>
            <button id="11" class="hover:bg-black text-white font-bold rounded-lg shadow-md col-start-3 col-end-5 h-[75px] {{ $skripsiList->where('semester', 11)->count() > 0 ? 'bg-green-500' : ($pklList->where('semester', 11)->count() > 0 ? 'bg-yellow-500' : ($khsList->where('semester', 11)->count() > 0 ? 'bg-blue-600' : ($irsList->where('semester', 11)->count() > 0 ? 'bg-blue-400' : 'bg-red-500'))) }}">11</button>
            <button id="12" class="hover:bg-black text-white font-bold rounded-lg shadow-md col-start-5 col-end-7 h-[75px] {{ $skripsiList->where('semester', 12)->count() > 0 ? 'bg-green-500' : ($pklList->where('semester', 12)->count() > 0 ? 'bg-yellow-500' : ($khsList->where('semester', 12)->count() > 0 ? 'bg-blue-600' : ($irsList->where('semester', 12)->count() > 0 ? 'bg-blue-400' : 'bg-red-500'))) }}">12</button>
            <button id="13" class="hover:bg-black text-white font-bold rounded-lg shadow-md col-start-2 col-end-4 h-[75px] {{ $skripsiList->where('semester', 13)->count() > 0 ? 'bg-green-500' : ($pklList->where('semester', 13)->count() > 0 ? 'bg-yellow-500' : ($khsList->where('semester', 13)->count() > 0 ? 'bg-blue-600' : ($irsList->where('semester', 13)->count() > 0 ? 'bg-blue-400' : 'bg-red-500'))) }}">13</button>
            <button id="14" class="hover:bg-black text-white font-bold rounded-lg shadow-md col-start-4 col-end-6 h-[75px] {{ $skripsiList->where('semester', 14)->count() > 0 ? 'bg-green-500' : ($pklList->where('semester', 14)->count() > 0 ? 'bg-yellow-500' : ($khsList->where('semester', 14)->count() > 0 ? 'bg-blue-600' : ($irsList->where('semester', 14)->count() > 0 ? 'bg-blue-400' : 'bg-red-500'))) }}">14</button>
        </div>
        <div class="grid col-start-2 grid-cols-1 grid-rows-6 bg-blue-500 dark:bg-gray-800 h-[440px] shadow-lg rounded-lg p-4 border-b-4 border-blue-600 dark:border-gray-600">
            <div id="dynamic-details" class="grid col-start-1 row-start-1 row-end-6 grid-cols-2 grid-rows-3 m-1 gap-2">
                <div class="col-span-2 row-start-1 text-white font-medium group">
                    <h1 class="font-semibold justify-center text-center">Semester</h1>
                    <h2 class="text-6xl justify-center text-center" id="semesterValue">-</h2>
                </div>
                <div class="col-start-1 row-start-2 bg-blue-500 dark:bg-gray-700 shadow-lg rounded-md p-4 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                    <p class="font-semibold font-small justify-center text-center">IP Semester</p>
                    <p class="text-4xl justify-center text-center" id="ipsValue">-</p>
                </div>
                <div class="col-start-2 row-start-2 bg-blue-500 dark:bg-gray-700 shadow-lg rounded-md p-4 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                    <p class="font-semibold justify-center text-center">SKS Semester</p>
                    <p class="text-4xl justify-center text-center" id="sksValue">-</p>
                </div>
                <div class="col-start-1 row-start-3 bg-blue-500 dark:bg-gray-700 shadow-lg rounded-md p-4 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                    <p class="font-semibold justify-center text-center">IP Kumulatif</p>
                    <p class="text-4xl justify-center text-center" id="ipkValue">-</p>
                </div>
                <div class="col-start-2 row-start-3 bg-blue-500 dark:bg-gray-700 shadow-lg rounded-md p-4 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                    <p class="font-semibold justify-center text-center">SKS Kumulatif</p>
                    <p class="text-4xl justify-center text-center" id="skskValue">-</p>
                </div>
                {{-- <div class="col-span-2 bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md p-4 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                    <div class="grid grid-cols-2"> 
                        <div class="row-span-2">
                            <h1 class="font-semibold">PKL</h1>
                            <h2 class="text-4xl font-bold" id="statusPKL">Lulus</h2>
                        </div>
                        <h1 class="bg-neutral-50 rounded-full mb-2 font-bold text-black text-center flex justify-center items-center w-auto h-8">Nilai : A</h1>
                        <button class="btn btn-sm rounded-full col-start-2">Unduh</button>
                    </div>
                </div> --}}
                {{-- <div class="col-span-2 bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md p-4 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                    <h1 class="font-semibold"></h1>
                    <h2 class="text-4xl font-bold" id="statusSkripsi"></h2>
                </div> --}}
            </div>
            <div id="dynamic-buttons" class="grid col-start-1 row-start-6 grid-cols-4 grid-rows-1 m-1 gap-2 items-end">
                <a disabled id="irsButton" href="" class="btn btn-md col-start-1 row-start-1 content-center bg-blue-300 dark:bg-gray-600 shadow-lg rounded-md p-4 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                    <p class="font-semibold">File IRS</p>
                </a>
                <a disabled id="khsButton" href="" class="btn btn-md col-start-2 row-start-1 content-center bg-blue-300 dark:bg-gray-600 shadow-lg rounded-md p-4 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                    <p class="font-semibold">File KHS</p>
                </a>
                <a disabled id="pklButton" href="" class="btn btn-md col-start-3 row-start-1 content-center bg-blue-300 dark:bg-gray-600 shadow-lg rounded-md p-4 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                    <p class="font-semibold">File PKL</p>
                </a>
                <a disabled id="skripsiButton" href="" class="btn btn-md col-start-4 row-start-1 content-center bg-blue-300 dark:bg-gray-600 shadow-lg rounded-md p-4 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group">
                    <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"/></svg>
                    <p class="font-semibold">File Skripsi</p>
                </a>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Get all semester buttons
            const semesterButtons = document.getElementById('semesterButton');
    
            // Add a click event listener to the buttons container
            semesterButtons.addEventListener('click', function (event) {
                // Check if the clicked element is a button

                if (event.target.tagName === 'BUTTON' && event.target.id === '1') {
                    document.getElementById('ipsValue').textContent = {{ $khsList->where('semester', 1)->count() > 0 ? number_format($khsList->where('semester', 1)->take(1)->value('ips'), 2, '.', ',') : '0.00' }};
                    document.getElementById('sksValue').textContent = {{ $khsList->where('semester', 1)->count() > 0 ? $khsList->where('semester', 1)->take(1)->value('sks_semester') : '0' }};
                    document.getElementById('ipkValue').textContent = {{ $khsList->where('semester', 1)->count() > 0 ? number_format($khsList->where('semester', 1)->take(1)->value('ipk'), 2, '.', ',') : '0.00' }};
                    document.getElementById('skskValue').textContent = {{ $khsList->where('semester', 1)->count() > 0 ? $khsList->where('semester', 1)->take(1)->value('sks_total') : '0' }};
                    document.getElementById('semesterValue').textContent = '1';
                    if ({{ $irsList->where('semester', 1)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('irsButton').href = "{{ $irsList->where('semester', 1)->count() > 0 ? asset('storage/' . $irsList->where('semester', 1)->take(1)->value('file')) : '#' }}";
                        document.getElementById('irsButton').classList.remove('bg-blue-300');
                        document.getElementById('irsButton').classList.add('bg-blue-600');
                        document.getElementById('irsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('irsButton').href = "#";
                        document.getElementById('irsButton').classList.remove('bg-blue-600');
                        document.getElementById('irsButton').classList.add('bg-blue-300');
                        document.getElementById('irsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $khsList->where('semester', 1)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('khsButton').href = "{{ $khsList->where('semester', 1)->count() > 0 ? asset('storage/' . $khsList->where('semester', 1)->take(1)->value('file')) : '#' }}";
                        document.getElementById('khsButton').classList.remove('bg-blue-300');
                        document.getElementById('khsButton').classList.add('bg-blue-600');
                        document.getElementById('khsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('khsButton').href = "#";
                        document.getElementById('khsButton').classList.remove('bg-blue-600');
                        document.getElementById('khsButton').classList.add('bg-blue-300');
                        document.getElementById('khsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $pklList->where('semester', 1)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('pklButton').href = "{{ $pklList->where('semester', 1)->count() > 0 ? asset('storage/' . $pklList->where('semester', 1)->take(1)->value('file')) : '#' }}";
                        document.getElementById('pklButton').classList.remove('bg-blue-300');
                        document.getElementById('pklButton').classList.add('bg-blue-600');
                        document.getElementById('pklButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('pklButton').href = "#";
                        document.getElementById('pklButton').classList.remove('bg-blue-600');
                        document.getElementById('pklButton').classList.add('bg-blue-300');
                        document.getElementById('pklButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $skripsiList->where('semester', 1)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('skripsiButton').href = "{{ $skripsiList->where('semester', 1)->count() > 0 ? asset('storage/' . $skripsiList->where('semester', 1)->take(1)->value('file')) : '#' }}";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-300');
                        document.getElementById('skripsiButton').classList.add('bg-blue-600');
                        document.getElementById('skripsiButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('skripsiButton').href = "#";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-600');
                        document.getElementById('skripsiButton').classList.add('bg-blue-300');
                        document.getElementById('skripsiButton').setAttribute('disabled', 'true');
                    }
                }
                else if (event.target.tagName === 'BUTTON' && event.target.id === '2') {
                    document.getElementById('ipsValue').textContent = {{ $khsList->where('semester', 2)->count() > 0 ? number_format($khsList->where('semester', 2)->take(1)->value('ips'), 2, '.', ',') : '0.00' }};
                    document.getElementById('sksValue').textContent = {{ $khsList->where('semester', 2)->count() > 0 ? $khsList->where('semester', 2)->take(1)->value('sks_semester') : '0'}};
                    document.getElementById('ipkValue').textContent = {{ $khsList->where('semester', 2)->count() > 0 ? number_format($khsList->where('semester', 2)->take(1)->value('ipk'), 2, '.', ',') : '0.00' }};
                    document.getElementById('skskValue').textContent = {{ $khsList->where('semester', 2)->count() > 0 ? $khsList->where('semester', 2)->take(1)->value('sks_total') : '0'}};
                    document.getElementById('semesterValue').textContent = '2';
                    if ({{ $irsList->where('semester', 2)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('irsButton').href = "{{ $irsList->where('semester', 2)->count() > 0 ? asset('storage/' . $irsList->where('semester', 2)->take(1)->value('file')) : '#' }}";
                        document.getElementById('irsButton').classList.remove('bg-blue-300');
                        document.getElementById('irsButton').classList.add('bg-blue-600');
                        document.getElementById('irsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('irsButton').href = "#";
                        document.getElementById('irsButton').classList.remove('bg-blue-600');
                        document.getElementById('irsButton').classList.add('bg-blue-300');
                        document.getElementById('irsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $khsList->where('semester', 2)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('khsButton').href = "{{ $khsList->where('semester', 2)->count() > 0 ? asset('storage/' . $khsList->where('semester', 2)->take(1)->value('file')) : '#' }}";
                        document.getElementById('khsButton').classList.remove('bg-blue-300');
                        document.getElementById('khsButton').classList.add('bg-blue-600');
                        document.getElementById('khsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('khsButton').href = "#";
                        document.getElementById('khsButton').classList.remove('bg-blue-600');
                        document.getElementById('khsButton').classList.add('bg-blue-300');
                        document.getElementById('khsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $pklList->where('semester', 2)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('pklButton').href = "{{ $pklList->where('semester', 2)->count() > 0 ? asset('storage/' . $pklList->where('semester', 2)->take(1)->value('file')) : '#' }}";
                        document.getElementById('pklButton').classList.remove('bg-blue-300');
                        document.getElementById('pklButton').classList.add('bg-blue-600');
                        document.getElementById('pklButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('pklButton').href = "#";
                        document.getElementById('pklButton').classList.remove('bg-blue-600');
                        document.getElementById('pklButton').classList.add('bg-blue-300');
                        document.getElementById('pklButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $skripsiList->where('semester', 2)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('skripsiButton').href = "{{ $skripsiList->where('semester', 2)->count() > 0 ? asset('storage/' . $skripsiList->where('semester', 2)->take(1)->value('file')) : '#' }}";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-300');
                        document.getElementById('skripsiButton').classList.add('bg-blue-600');
                        document.getElementById('skripsiButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('skripsiButton').href = "#";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-600');
                        document.getElementById('skripsiButton').classList.add('bg-blue-300');
                        document.getElementById('skripsiButton').setAttribute('disabled', 'true');
                    }
                }
                else if (event.target.tagName === 'BUTTON' && event.target.id === '3') {
                    document.getElementById('ipsValue').textContent = {{ $khsList->where('semester', 3)->count() > 0 ? number_format($khsList->where('semester', 3)->take(1)->value('ips'), 2, '.', ',') : '0.00' }};
                    document.getElementById('sksValue').textContent = {{ $khsList->where('semester', 3)->count() > 0 ? $khsList->where('semester', 3)->take(1)->value('sks_semester') : '0'}};
                    document.getElementById('ipkValue').textContent = {{ $khsList->where('semester', 3)->count() > 0 ? number_format($khsList->where('semester', 3)->take(1)->value('ipk'), 2, '.', ',') : '0.00' }};
                    document.getElementById('skskValue').textContent = {{ $khsList->where('semester', 3)->count() > 0 ? $khsList->where('semester', 3)->take(1)->value('sks_total') : '0'}};
                    document.getElementById('semesterValue').textContent = '3';
                    if ({{ $irsList->where('semester', 3)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('irsButton').href = "{{ $irsList->where('semester', 3)->count() > 0 ? asset('storage/' . $irsList->where('semester', 3)->take(1)->value('file')) : '#' }}";
                        document.getElementById('irsButton').classList.remove('bg-blue-300');
                        document.getElementById('irsButton').classList.add('bg-blue-600');
                        document.getElementById('irsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('irsButton').href = "#";
                        document.getElementById('irsButton').classList.remove('bg-blue-600');
                        document.getElementById('irsButton').classList.add('bg-blue-300');
                        document.getElementById('irsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $khsList->where('semester', 3)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('khsButton').href = "{{ $khsList->where('semester', 3)->count() > 0 ? asset('storage/' . $khsList->where('semester', 3)->take(1)->value('file')) : '#' }}";
                        document.getElementById('khsButton').classList.remove('bg-blue-300');
                        document.getElementById('khsButton').classList.add('bg-blue-600');
                        document.getElementById('khsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('khsButton').href = "#";
                        document.getElementById('khsButton').classList.remove('bg-blue-600');
                        document.getElementById('khsButton').classList.add('bg-blue-300');
                        document.getElementById('khsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $pklList->where('semester', 3)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('pklButton').href = "{{ $pklList->where('semester', 3)->count() > 0 ? asset('storage/' . $pklList->where('semester', 3)->take(1)->value('file')) : '#' }}";
                        document.getElementById('pklButton').classList.remove('bg-blue-300');
                        document.getElementById('pklButton').classList.add('bg-blue-600');
                        document.getElementById('pklButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('pklButton').href = "#";
                        document.getElementById('pklButton').classList.remove('bg-blue-600');
                        document.getElementById('pklButton').classList.add('bg-blue-300');
                        document.getElementById('pklButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $skripsiList->where('semester', 3)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('skripsiButton').href = "{{ $skripsiList->where('semester', 3)->count() > 0 ? asset('storage/' . $skripsiList->where('semester', 3)->take(1)->value('file')) : '#' }}";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-300');
                        document.getElementById('skripsiButton').classList.add('bg-blue-600');
                        document.getElementById('skripsiButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('skripsiButton').href = "#";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-600');
                        document.getElementById('skripsiButton').classList.add('bg-blue-300');
                        document.getElementById('skripsiButton').setAttribute('disabled', 'true');
                    }
                }
                else if (event.target.tagName === 'BUTTON' && event.target.id === '4') {
                    document.getElementById('ipsValue').textContent = {{ $khsList->where('semester', 4)->count() > 0 ? number_format($khsList->where('semester', 4)->take(1)->value('ips'), 2, '.', ',') : '0.00' }};
                    document.getElementById('sksValue').textContent = {{ $khsList->where('semester', 4)->count() > 0 ? $khsList->where('semester', 4)->take(1)->value('sks_semester') : '0'}};
                    document.getElementById('ipkValue').textContent = {{ $khsList->where('semester', 4)->count() > 0 ? number_format($khsList->where('semester', 4)->take(1)->value('ipk'), 2, '.', ',') : '0.00' }};
                    document.getElementById('skskValue').textContent = {{ $khsList->where('semester', 4)->count() > 0 ? $khsList->where('semester', 4)->take(1)->value('sks_total') : '0'}};
                    document.getElementById('semesterValue').textContent = '4';
                    if ({{ $irsList->where('semester', 4)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('irsButton').href = "{{ $irsList->where('semester', 4)->count() > 0 ? asset('storage/' . $irsList->where('semester', 4)->take(1)->value('file')) : '#' }}";
                        document.getElementById('irsButton').classList.remove('bg-blue-300');
                        document.getElementById('irsButton').classList.add('bg-blue-600');
                        document.getElementById('irsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('irsButton').href = "#";
                        document.getElementById('irsButton').classList.remove('bg-blue-600');
                        document.getElementById('irsButton').classList.add('bg-blue-300');
                        document.getElementById('irsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $khsList->where('semester', 4)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('khsButton').href = "{{ $khsList->where('semester', 4)->count() > 0 ? asset('storage/' . $khsList->where('semester', 4)->take(1)->value('file')) : '#' }}";
                        document.getElementById('khsButton').classList.remove('bg-blue-300');
                        document.getElementById('khsButton').classList.add('bg-blue-600');
                        document.getElementById('khsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('khsButton').href = "#";
                        document.getElementById('khsButton').classList.remove('bg-blue-600');
                        document.getElementById('khsButton').classList.add('bg-blue-300');
                        document.getElementById('khsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $pklList->where('semester', 4)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('pklButton').href = "{{ $pklList->where('semester', 4)->count() > 0 ? asset('storage/' . $pklList->where('semester', 4)->take(1)->value('file')) : '#' }}";
                        document.getElementById('pklButton').classList.remove('bg-blue-300');
                        document.getElementById('pklButton').classList.add('bg-blue-600');
                        document.getElementById('pklButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('pklButton').href = "#";
                        document.getElementById('pklButton').classList.remove('bg-blue-600');
                        document.getElementById('pklButton').classList.add('bg-blue-300');
                        document.getElementById('pklButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $skripsiList->where('semester', 4)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('skripsiButton').href = "{{ $skripsiList->where('semester', 4)->count() > 0 ? asset('storage/' . $skripsiList->where('semester', 4)->take(1)->value('file')) : '#' }}";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-300');
                        document.getElementById('skripsiButton').classList.add('bg-blue-600');
                        document.getElementById('skripsiButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('skripsiButton').href = "#";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-600');
                        document.getElementById('skripsiButton').classList.add('bg-blue-300');
                        document.getElementById('skripsiButton').setAttribute('disabled', 'true');
                    }
                }
                else if (event.target.tagName === 'BUTTON' && event.target.id === '5') {
                    document.getElementById('ipsValue').textContent = {{ $khsList->where('semester', 5)->count() > 0 ? number_format($khsList->where('semester', 5)->take(1)->value('ips'), 2, '.', ',') : '0.00' }};
                    document.getElementById('sksValue').textContent = {{ $khsList->where('semester', 5)->count() > 0 ? $khsList->where('semester', 5)->take(1)->value('sks_semester') : '0'}};
                    document.getElementById('ipkValue').textContent = {{ $khsList->where('semester', 5)->count() > 0 ? number_format($khsList->where('semester', 5)->take(1)->value('ipk'), 2, '.', ',') : '0.00' }};
                    document.getElementById('skskValue').textContent = {{ $khsList->where('semester', 5)->count() > 0 ? $khsList->where('semester', 5)->take(1)->value('sks_total') : '0'}};
                    document.getElementById('semesterValue').textContent = '5';
                    if ({{ $irsList->where('semester', 5)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('irsButton').href = "{{ $irsList->where('semester', 5)->count() > 0 ? asset('storage/' . $irsList->where('semester', 5)->take(1)->value('file')) : '#' }}";
                        document.getElementById('irsButton').classList.remove('bg-blue-300');
                        document.getElementById('irsButton').classList.add('bg-blue-600');
                        document.getElementById('irsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('irsButton').href = "#";
                        document.getElementById('irsButton').classList.remove('bg-blue-600');
                        document.getElementById('irsButton').classList.add('bg-blue-300');
                        document.getElementById('irsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $khsList->where('semester', 5)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('khsButton').href = "{{ $khsList->where('semester', 5)->count() > 0 ? asset('storage/' . $khsList->where('semester', 5)->take(1)->value('file')) : '#' }}";
                        document.getElementById('khsButton').classList.remove('bg-blue-300');
                        document.getElementById('khsButton').classList.add('bg-blue-600');
                        document.getElementById('khsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('khsButton').href = "#";
                        document.getElementById('khsButton').classList.remove('bg-blue-600');
                        document.getElementById('khsButton').classList.add('bg-blue-300');
                        document.getElementById('khsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $pklList->where('semester', 5)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('pklButton').href = "{{ $pklList->where('semester', 5)->count() > 0 ? asset('storage/' . $pklList->where('semester', 5)->take(1)->value('file')) : '#' }}";
                        document.getElementById('pklButton').classList.remove('bg-blue-300');
                        document.getElementById('pklButton').classList.add('bg-blue-600');
                        document.getElementById('pklButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('pklButton').href = "#";
                        document.getElementById('pklButton').classList.remove('bg-blue-600');
                        document.getElementById('pklButton').classList.add('bg-blue-300');
                        document.getElementById('pklButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $skripsiList->where('semester', 5)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('skripsiButton').href = "{{ $skripsiList->where('semester', 5)->count() > 0 ? asset('storage/' . $skripsiList->where('semester', 5)->take(1)->value('file')) : '#' }}";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-300');
                        document.getElementById('skripsiButton').classList.add('bg-blue-600');
                        document.getElementById('skripsiButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('skripsiButton').href = "#";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-600');
                        document.getElementById('skripsiButton').classList.add('bg-blue-300');
                        document.getElementById('skripsiButton').setAttribute('disabled', 'true');
                    }
                }
                else if (event.target.tagName === 'BUTTON' && event.target.id === '6') {
                    document.getElementById('ipsValue').textContent = {{ $khsList->where('semester', 6)->count() > 0 ? number_format($khsList->where('semester', 6)->take(1)->value('ips'), 2, '.', ',') : '0.00' }};
                    document.getElementById('sksValue').textContent = {{ $khsList->where('semester', 6)->count() > 0 ? $khsList->where('semester', 6)->take(1)->value('sks_semester') : '0'}};
                    document.getElementById('ipkValue').textContent = {{ $khsList->where('semester', 6)->count() > 0 ? number_format($khsList->where('semester', 6)->take(1)->value('ipk'), 2, '.', ',') : '0.00' }};
                    document.getElementById('skskValue').textContent = {{ $khsList->where('semester', 6)->count() > 0 ? $khsList->where('semester', 6)->take(1)->value('sks_total') : '0'}};
                    document.getElementById('semesterValue').textContent = '6';
                    if ({{ $irsList->where('semester', 6)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('irsButton').href = "{{ $irsList->where('semester', 6)->count() > 0 ? asset('storage/' . $irsList->where('semester', 6)->take(1)->value('file')) : '#' }}";
                        document.getElementById('irsButton').classList.remove('bg-blue-300');
                        document.getElementById('irsButton').classList.add('bg-blue-600');
                        document.getElementById('irsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('irsButton').href = "#";
                        document.getElementById('irsButton').classList.remove('bg-blue-600');
                        document.getElementById('irsButton').classList.add('bg-blue-300');
                        document.getElementById('irsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $khsList->where('semester', 6)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('khsButton').href = "{{ $khsList->where('semester', 6)->count() > 0 ? asset('storage/' . $khsList->where('semester', 6)->take(1)->value('file')) : '#' }}";
                        document.getElementById('khsButton').classList.remove('bg-blue-300');
                        document.getElementById('khsButton').classList.add('bg-blue-600');
                        document.getElementById('khsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('khsButton').href = "#";
                        document.getElementById('khsButton').classList.remove('bg-blue-600');
                        document.getElementById('khsButton').classList.add('bg-blue-300');
                        document.getElementById('khsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $pklList->where('semester', 6)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('pklButton').href = "{{ $pklList->where('semester', 6)->count() > 0 ? asset('storage/' . $pklList->where('semester', 6)->take(1)->value('file')) : '#' }}";
                        document.getElementById('pklButton').classList.remove('bg-blue-300');
                        document.getElementById('pklButton').classList.add('bg-blue-600');
                        document.getElementById('pklButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('pklButton').href = "#";
                        document.getElementById('pklButton').classList.remove('bg-blue-600');
                        document.getElementById('pklButton').classList.add('bg-blue-300');
                        document.getElementById('pklButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $skripsiList->where('semester', 6)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('skripsiButton').href = "{{ $skripsiList->where('semester', 6)->count() > 0 ? asset('storage/' . $skripsiList->where('semester', 6)->take(1)->value('file')) : '#' }}";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-300');
                        document.getElementById('skripsiButton').classList.add('bg-blue-600');
                        document.getElementById('skripsiButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('skripsiButton').href = "#";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-600');
                        document.getElementById('skripsiButton').classList.add('bg-blue-300');
                        document.getElementById('skripsiButton').setAttribute('disabled', 'true');
                    }
                }
                else if (event.target.tagName === 'BUTTON' && event.target.id === '7') {
                    document.getElementById('ipsValue').textContent = {{ $khsList->where('semester', 7)->count() > 0 ? number_format($khsList->where('semester', 7)->take(1)->value('ips'), 2, '.', ',') : '0.00' }};
                    document.getElementById('sksValue').textContent = {{ $khsList->where('semester', 7)->count() > 0 ? $khsList->where('semester', 7)->take(1)->value('sks_semester') : '0'}};
                    document.getElementById('ipkValue').textContent = {{ $khsList->where('semester', 7)->count() > 0 ? number_format($khsList->where('semester', 7)->take(1)->value('ipk'), 2, '.', ',') : '0.00' }};
                    document.getElementById('skskValue').textContent = {{ $khsList->where('semester', 7)->count() > 0 ? $khsList->where('semester', 7)->take(1)->value('sks_total') : '0'}};
                    document.getElementById('semesterValue').textContent = '7';
                    if ({{ $irsList->where('semester', 7)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('irsButton').href = "{{ $irsList->where('semester', 7)->count() > 0 ? asset('storage/' . $irsList->where('semester', 7)->take(1)->value('file')) : '#' }}";
                        document.getElementById('irsButton').classList.remove('bg-blue-300');
                        document.getElementById('irsButton').classList.add('bg-blue-600');
                        document.getElementById('irsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('irsButton').href = "#";
                        document.getElementById('irsButton').classList.remove('bg-blue-600');
                        document.getElementById('irsButton').classList.add('bg-blue-300');
                        document.getElementById('irsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $khsList->where('semester', 7)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('khsButton').href = "{{ $khsList->where('semester', 7)->count() > 0 ? asset('storage/' . $khsList->where('semester', 7)->take(1)->value('file')) : '#' }}";
                        document.getElementById('khsButton').classList.remove('bg-blue-300');
                        document.getElementById('khsButton').classList.add('bg-blue-600');
                        document.getElementById('khsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('khsButton').href = "#";
                        document.getElementById('khsButton').classList.remove('bg-blue-600');
                        document.getElementById('khsButton').classList.add('bg-blue-300');
                        document.getElementById('khsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $pklList->where('semester', 7)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('pklButton').href = "{{ $pklList->where('semester', 7)->count() > 0 ? asset('storage/' . $pklList->where('semester', 7)->take(1)->value('file')) : '#' }}";
                        document.getElementById('pklButton').classList.remove('bg-blue-300');
                        document.getElementById('pklButton').classList.add('bg-blue-600');
                        document.getElementById('pklButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('pklButton').href = "#";
                        document.getElementById('pklButton').classList.remove('bg-blue-600');
                        document.getElementById('pklButton').classList.add('bg-blue-300');
                        document.getElementById('pklButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $skripsiList->where('semester', 7)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('skripsiButton').href = "{{ $skripsiList->where('semester', 7)->count() > 0 ? asset('storage/' . $skripsiList->where('semester', 7)->take(1)->value('file')) : '#' }}";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-300');
                        document.getElementById('skripsiButton').classList.add('bg-blue-600');
                        document.getElementById('skripsiButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('skripsiButton').href = "#";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-600');
                        document.getElementById('skripsiButton').classList.add('bg-blue-300');
                        document.getElementById('skripsiButton').setAttribute('disabled', 'true');
                    }
                }
                else if (event.target.tagName === 'BUTTON' && event.target.id === '8') {
                    document.getElementById('ipsValue').textContent = {{ $khsList->where('semester', 8)->count() > 0 ? number_format($khsList->where('semester', 8)->take(1)->value('ips'), 2, '.', ',') : '0.00' }};
                    document.getElementById('sksValue').textContent = {{ $khsList->where('semester', 8)->count() > 0 ? $khsList->where('semester', 8)->take(1)->value('sks_semester') : '0'}};
                    document.getElementById('ipkValue').textContent = {{ $khsList->where('semester', 8)->count() > 0 ? number_format($khsList->where('semester', 8)->take(1)->value('ipk'), 2, '.', ',') : '0.00' }};
                    document.getElementById('skskValue').textContent = {{ $khsList->where('semester', 8)->count() > 0 ? $khsList->where('semester', 8)->take(1)->value('sks_total') : '0'}};
                    document.getElementById('semesterValue').textContent = '8';
                    if ({{ $irsList->where('semester', 8)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('irsButton').href = "{{ $irsList->where('semester', 8)->count() > 0 ? asset('storage/' . $irsList->where('semester', 8)->take(1)->value('file')) : '#' }}";
                        document.getElementById('irsButton').classList.remove('bg-blue-300');
                        document.getElementById('irsButton').classList.add('bg-blue-600');
                        document.getElementById('irsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('irsButton').href = "#";
                        document.getElementById('irsButton').classList.remove('bg-blue-600');
                        document.getElementById('irsButton').classList.add('bg-blue-300');
                        document.getElementById('irsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $khsList->where('semester', 8)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('khsButton').href = "{{ $khsList->where('semester', 8)->count() > 0 ? asset('storage/' . $khsList->where('semester', 8)->take(1)->value('file')) : '#' }}";
                        document.getElementById('khsButton').classList.remove('bg-blue-300');
                        document.getElementById('khsButton').classList.add('bg-blue-600');
                        document.getElementById('khsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('khsButton').href = "#";
                        document.getElementById('khsButton').classList.remove('bg-blue-600');
                        document.getElementById('khsButton').classList.add('bg-blue-300');
                        document.getElementById('khsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $pklList->where('semester', 8)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('pklButton').href = "{{ $pklList->where('semester', 8)->count() > 0 ? asset('storage/' . $pklList->where('semester', 8)->take(1)->value('file')) : '#' }}";
                        document.getElementById('pklButton').classList.remove('bg-blue-300');
                        document.getElementById('pklButton').classList.add('bg-blue-600');
                        document.getElementById('pklButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('pklButton').href = "#";
                        document.getElementById('pklButton').classList.remove('bg-blue-600');
                        document.getElementById('pklButton').classList.add('bg-blue-300');
                        document.getElementById('pklButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $skripsiList->where('semester', 8)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('skripsiButton').href = "{{ $skripsiList->where('semester', 8)->count() > 0 ? asset('storage/' . $skripsiList->where('semester', 8)->take(1)->value('file')) : '#' }}";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-300');
                        document.getElementById('skripsiButton').classList.add('bg-blue-600');
                        document.getElementById('skripsiButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('skripsiButton').href = "#";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-600');
                        document.getElementById('skripsiButton').classList.add('bg-blue-300');
                        document.getElementById('skripsiButton').setAttribute('disabled', 'true');
                    }
                }
                else if (event.target.tagName === 'BUTTON' && event.target.id === '9') {
                    document.getElementById('ipsValue').textContent = {{ $khsList->where('semester', 9)->count() > 0 ? number_format($khsList->where('semester', 9)->take(1)->value('ips'), 2, '.', ',') : '0.00' }};
                    document.getElementById('sksValue').textContent = {{ $khsList->where('semester', 9)->count() > 0 ? $khsList->where('semester', 9)->take(1)->value('sks_semester') : '0'}};
                    document.getElementById('ipkValue').textContent = {{ $khsList->where('semester', 9)->count() > 0 ? number_format($khsList->where('semester', 9)->take(1)->value('ipk'), 2, '.', ',') : '0.00' }};
                    document.getElementById('skskValue').textContent = {{ $khsList->where('semester', 9)->count() > 0 ? $khsList->where('semester', 9)->take(1)->value('sks_total') : '0'}};
                    document.getElementById('semesterValue').textContent = '9';
                    if ({{ $irsList->where('semester', 9)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('irsButton').href = "{{ $irsList->where('semester', 9)->count() > 0 ? asset('storage/' . $irsList->where('semester', 9)->take(1)->value('file')) : '#' }}";
                        document.getElementById('irsButton').classList.remove('bg-blue-300');
                        document.getElementById('irsButton').classList.add('bg-blue-600');
                        document.getElementById('irsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('irsButton').href = "#";
                        document.getElementById('irsButton').classList.remove('bg-blue-600');
                        document.getElementById('irsButton').classList.add('bg-blue-300');
                        document.getElementById('irsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $khsList->where('semester', 9)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('khsButton').href = "{{ $khsList->where('semester', 9)->count() > 0 ? asset('storage/' . $khsList->where('semester', 9)->take(1)->value('file')) : '#' }}";
                        document.getElementById('khsButton').classList.remove('bg-blue-300');
                        document.getElementById('khsButton').classList.add('bg-blue-600');
                        document.getElementById('khsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('khsButton').href = "#";
                        document.getElementById('khsButton').classList.remove('bg-blue-600');
                        document.getElementById('khsButton').classList.add('bg-blue-300');
                        document.getElementById('khsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $pklList->where('semester', 9)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('pklButton').href = "{{ $pklList->where('semester', 9)->count() > 0 ? asset('storage/' . $pklList->where('semester', 9)->take(1)->value('file')) : '#' }}";
                        document.getElementById('pklButton').classList.remove('bg-blue-300');
                        document.getElementById('pklButton').classList.add('bg-blue-600');
                        document.getElementById('pklButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('pklButton').href = "#";
                        document.getElementById('pklButton').classList.remove('bg-blue-600');
                        document.getElementById('pklButton').classList.add('bg-blue-300');
                        document.getElementById('pklButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $skripsiList->where('semester', 9)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('skripsiButton').href = "{{ $skripsiList->where('semester', 9)->count() > 0 ? asset('storage/' . $skripsiList->where('semester', 9)->take(1)->value('file')) : '#' }}";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-300');
                        document.getElementById('skripsiButton').classList.add('bg-blue-600');
                        document.getElementById('skripsiButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('skripsiButton').href = "#";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-600');
                        document.getElementById('skripsiButton').classList.add('bg-blue-300');
                        document.getElementById('skripsiButton').setAttribute('disabled', 'true');
                    }
                }
                else if (event.target.tagName === 'BUTTON' && event.target.id === '10') {
                    document.getElementById('ipsValue').textContent = {{ $khsList->where('semester', 10)->count() > 0 ? number_format($khsList->where('semester', 10)->take(1)->value('ips'), 2, '.', ',') : '0.00' }};
                    document.getElementById('sksValue').textContent = {{ $khsList->where('semester', 10)->count() > 0 ? $khsList->where('semester', 10)->take(1)->value('sks_semester') : '0'}};
                    document.getElementById('ipkValue').textContent = {{ $khsList->where('semester', 10)->count() > 0 ? number_format($khsList->where('semester', 10)->take(1)->value('ipk'), 2, '.', ',') : '0.00' }};
                    document.getElementById('skskValue').textContent = {{ $khsList->where('semester', 10)->count() > 0 ? $khsList->where('semester', 10)->take(1)->value('sks_total') : '0'}};
                    document.getElementById('semesterValue').textContent = '10';
                    if ({{ $irsList->where('semester', 10)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('irsButton').href = "{{ $irsList->where('semester', 10)->count() > 0 ? asset('storage/' . $irsList->where('semester', 10)->take(1)->value('file')) : '#' }}";
                        document.getElementById('irsButton').classList.remove('bg-blue-300');
                        document.getElementById('irsButton').classList.add('bg-blue-600');
                        document.getElementById('irsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('irsButton').href = "#";
                        document.getElementById('irsButton').classList.remove('bg-blue-600');
                        document.getElementById('irsButton').classList.add('bg-blue-300');
                        document.getElementById('irsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $khsList->where('semester', 10)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('khsButton').href = "{{ $khsList->where('semester', 10)->count() > 0 ? asset('storage/' . $khsList->where('semester', 10)->take(1)->value('file')) : '#' }}";
                        document.getElementById('khsButton').classList.remove('bg-blue-300');
                        document.getElementById('khsButton').classList.add('bg-blue-600');
                        document.getElementById('khsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('khsButton').href = "#";
                        document.getElementById('khsButton').classList.remove('bg-blue-600');
                        document.getElementById('khsButton').classList.add('bg-blue-300');
                        document.getElementById('khsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $pklList->where('semester', 10)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('pklButton').href = "{{ $pklList->where('semester', 10)->count() > 0 ? asset('storage/' . $pklList->where('semester', 10)->take(1)->value('file')) : '#' }}";
                        document.getElementById('pklButton').classList.remove('bg-blue-300');
                        document.getElementById('pklButton').classList.add('bg-blue-600');
                        document.getElementById('pklButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('pklButton').href = "#";
                        document.getElementById('pklButton').classList.remove('bg-blue-600');
                        document.getElementById('pklButton').classList.add('bg-blue-300');
                        document.getElementById('pklButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $skripsiList->where('semester', 10)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('skripsiButton').href = "{{ $skripsiList->where('semester', 10)->count() > 0 ? asset('storage/' . $skripsiList->where('semester', 10)->take(1)->value('file')) : '#' }}";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-300');
                        document.getElementById('skripsiButton').classList.add('bg-blue-600');
                        document.getElementById('skripsiButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('skripsiButton').href = "#";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-600');
                        document.getElementById('skripsiButton').classList.add('bg-blue-300');
                        document.getElementById('skripsiButton').setAttribute('disabled', 'true');
                    }
                }
                else if (event.target.tagName === 'BUTTON' && event.target.id === '11') {
                    document.getElementById('ipsValue').textContent = {{ $khsList->where('semester', 11)->count() > 0 ? number_format($khsList->where('semester', 11)->take(1)->value('ips'), 2, '.', ',') : '0.00' }};
                    document.getElementById('sksValue').textContent = {{ $khsList->where('semester', 11)->count() > 0 ? $khsList->where('semester', 11)->take(1)->value('sks_semester') : '0'}};
                    document.getElementById('ipkValue').textContent = {{ $khsList->where('semester', 11)->count() > 0 ? number_format($khsList->where('semester', 11)->take(1)->value('ipk'), 2, '.', ',') : '0.00' }};
                    document.getElementById('skskValue').textContent = {{ $khsList->where('semester', 11)->count() > 0 ? $khsList->where('semester', 11)->take(1)->value('sks_total') : '0'}};
                    document.getElementById('semesterValue').textContent = '11';
                    if ({{ $irsList->where('semester', 11)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('irsButton').href = "{{ $irsList->where('semester', 11)->count() > 0 ? asset('storage/' . $irsList->where('semester', 11)->take(1)->value('file')) : '#' }}";
                        document.getElementById('irsButton').classList.remove('bg-blue-300');
                        document.getElementById('irsButton').classList.add('bg-blue-600');
                        document.getElementById('irsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('irsButton').href = "#";
                        document.getElementById('irsButton').classList.remove('bg-blue-600');
                        document.getElementById('irsButton').classList.add('bg-blue-300');
                        document.getElementById('irsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $khsList->where('semester', 11)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('khsButton').href = "{{ $khsList->where('semester', 11)->count() > 0 ? asset('storage/' . $khsList->where('semester', 11)->take(1)->value('file')) : '#' }}";
                        document.getElementById('khsButton').classList.remove('bg-blue-300');
                        document.getElementById('khsButton').classList.add('bg-blue-600');
                        document.getElementById('khsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('khsButton').href = "#";
                        document.getElementById('khsButton').classList.remove('bg-blue-600');
                        document.getElementById('khsButton').classList.add('bg-blue-300');
                        document.getElementById('khsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $pklList->where('semester', 11)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('pklButton').href = "{{ $pklList->where('semester', 11)->count() > 0 ? asset('storage/' . $pklList->where('semester', 11)->take(1)->value('file')) : '#' }}";
                        document.getElementById('pklButton').classList.remove('bg-blue-300');
                        document.getElementById('pklButton').classList.add('bg-blue-600');
                        document.getElementById('pklButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('pklButton').href = "#";
                        document.getElementById('pklButton').classList.remove('bg-blue-600');
                        document.getElementById('pklButton').classList.add('bg-blue-300');
                        document.getElementById('pklButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $skripsiList->where('semester', 11)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('skripsiButton').href = "{{ $skripsiList->where('semester', 11)->count() > 0 ? asset('storage/' . $skripsiList->where('semester', 11)->take(1)->value('file')) : '#' }}";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-300');
                        document.getElementById('skripsiButton').classList.add('bg-blue-600');
                        document.getElementById('skripsiButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('skripsiButton').href = "#";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-600');
                        document.getElementById('skripsiButton').classList.add('bg-blue-300');
                        document.getElementById('skripsiButton').setAttribute('disabled', 'true');
                    }
                }
                else if (event.target.tagName === 'BUTTON' && event.target.id === '12') {
                    document.getElementById('ipsValue').textContent = {{ $khsList->where('semester', 12)->count() > 0 ? number_format($khsList->where('semester', 12)->take(1)->value('ips'), 2, '.', ',') : '0.00' }};
                    document.getElementById('sksValue').textContent = {{ $khsList->where('semester', 12)->count() > 0 ? $khsList->where('semester', 12)->take(1)->value('sks_semester') : '0'}};
                    document.getElementById('ipkValue').textContent = {{ $khsList->where('semester', 12)->count() > 0 ? number_format($khsList->where('semester', 12)->take(1)->value('ipk'), 2, '.', ',') : '0.00' }};
                    document.getElementById('skskValue').textContent = {{ $khsList->where('semester', 12)->count() > 0 ? $khsList->where('semester', 12)->take(1)->value('sks_total') : '0'}};
                    document.getElementById('semesterValue').textContent = '12';
                    if ({{ $irsList->where('semester', 12)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('irsButton').href = "{{ $irsList->where('semester', 12)->count() > 0 ? asset('storage/' . $irsList->where('semester', 12)->take(1)->value('file')) : '#' }}";
                        document.getElementById('irsButton').classList.remove('bg-blue-300');
                        document.getElementById('irsButton').classList.add('bg-blue-600');
                        document.getElementById('irsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('irsButton').href = "#";
                        document.getElementById('irsButton').classList.remove('bg-blue-600');
                        document.getElementById('irsButton').classList.add('bg-blue-300');
                        document.getElementById('irsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $khsList->where('semester', 12)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('khsButton').href = "{{ $khsList->where('semester', 12)->count() > 0 ? asset('storage/' . $khsList->where('semester', 12)->take(1)->value('file')) : '#' }}";
                        document.getElementById('khsButton').classList.remove('bg-blue-300');
                        document.getElementById('khsButton').classList.add('bg-blue-600');
                        document.getElementById('khsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('khsButton').href = "#";
                        document.getElementById('khsButton').classList.remove('bg-blue-600');
                        document.getElementById('khsButton').classList.add('bg-blue-300');
                        document.getElementById('khsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $pklList->where('semester', 12)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('pklButton').href = "{{ $pklList->where('semester', 12)->count() > 0 ? asset('storage/' . $pklList->where('semester', 12)->take(1)->value('file')) : '#' }}";
                        document.getElementById('pklButton').classList.remove('bg-blue-300');
                        document.getElementById('pklButton').classList.add('bg-blue-600');
                        document.getElementById('pklButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('pklButton').href = "#";
                        document.getElementById('pklButton').classList.remove('bg-blue-600');
                        document.getElementById('pklButton').classList.add('bg-blue-300');
                        document.getElementById('pklButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $skripsiList->where('semester', 12)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('skripsiButton').href = "{{ $skripsiList->where('semester', 12)->count() > 0 ? asset('storage/' . $skripsiList->where('semester', 12)->take(1)->value('file')) : '#' }}";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-300');
                        document.getElementById('skripsiButton').classList.add('bg-blue-600');
                        document.getElementById('skripsiButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('skripsiButton').href = "#";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-600');
                        document.getElementById('skripsiButton').classList.add('bg-blue-300');
                        document.getElementById('skripsiButton').setAttribute('disabled', 'true');
                    }
                }
                else if (event.target.tagName === 'BUTTON' && event.target.id === '13') {
                    document.getElementById('ipsValue').textContent = {{ $khsList->where('semester', 13)->count() > 0 ? number_format($khsList->where('semester', 13)->take(1)->value('ips'), 2, '.', ',') : '0.00' }};
                    document.getElementById('sksValue').textContent = {{ $khsList->where('semester', 13)->count() > 0 ? $khsList->where('semester', 13)->take(1)->value('sks_semester') : '0'}};
                    document.getElementById('ipkValue').textContent = {{ $khsList->where('semester', 13)->count() > 0 ? number_format($khsList->where('semester', 13)->take(1)->value('ipk'), 2, '.', ',') : '0.00' }};
                    document.getElementById('skskValue').textContent = {{ $khsList->where('semester', 13)->count() > 0 ? $khsList->where('semester', 13)->take(1)->value('sks_total') : '0'}};
                    document.getElementById('semesterValue').textContent = '13';
                    if ({{ $irsList->where('semester', 13)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('irsButton').href = "{{ $irsList->where('semester', 13)->count() > 0 ? asset('storage/' . $irsList->where('semester', 13)->take(1)->value('file')) : '#' }}";
                        document.getElementById('irsButton').classList.remove('bg-blue-300');
                        document.getElementById('irsButton').classList.add('bg-blue-600');
                        document.getElementById('irsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('irsButton').href = "#";
                        document.getElementById('irsButton').classList.remove('bg-blue-600');
                        document.getElementById('irsButton').classList.add('bg-blue-300');
                        document.getElementById('irsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $khsList->where('semester', 13)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('khsButton').href = "{{ $khsList->where('semester', 13)->count() > 0 ? asset('storage/' . $khsList->where('semester', 13)->take(1)->value('file')) : '#' }}";
                        document.getElementById('khsButton').classList.remove('bg-blue-300');
                        document.getElementById('khsButton').classList.add('bg-blue-600');
                        document.getElementById('khsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('khsButton').href = "#";
                        document.getElementById('khsButton').classList.remove('bg-blue-600');
                        document.getElementById('khsButton').classList.add('bg-blue-300');
                        document.getElementById('khsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $pklList->where('semester', 13)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('pklButton').href = "{{ $pklList->where('semester', 13)->count() > 0 ? asset('storage/' . $pklList->where('semester', 13)->take(1)->value('file')) : '#' }}";
                        document.getElementById('pklButton').classList.remove('bg-blue-300');
                        document.getElementById('pklButton').classList.add('bg-blue-600');
                        document.getElementById('pklButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('pklButton').href = "#";
                        document.getElementById('pklButton').classList.remove('bg-blue-600');
                        document.getElementById('pklButton').classList.add('bg-blue-300');
                        document.getElementById('pklButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $skripsiList->where('semester', 13)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('skripsiButton').href = "{{ $skripsiList->where('semester', 13)->count() > 0 ? asset('storage/' . $skripsiList->where('semester', 13)->take(1)->value('file')) : '#' }}";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-300');
                        document.getElementById('skripsiButton').classList.add('bg-blue-600');
                        document.getElementById('skripsiButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('skripsiButton').href = "#";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-600');
                        document.getElementById('skripsiButton').classList.add('bg-blue-300');
                        document.getElementById('skripsiButton').setAttribute('disabled', 'true');
                    }
                }
                else if (event.target.tagName === 'BUTTON' && event.target.id === '14') {
                    document.getElementById('ipsValue').textContent = {{ $khsList->where('semester', 14)->count() > 0 ? number_format($khsList->where('semester', 14)->take(1)->value('ips'), 2, '.', ',') : '0.00' }};
                    document.getElementById('sksValue').textContent = {{ $khsList->where('semester', 14)->count() > 0 ? $khsList->where('semester', 14)->take(1)->value('sks_semester') : '0'}};
                    document.getElementById('ipkValue').textContent = {{ $khsList->where('semester', 14)->count() > 0 ? number_format($khsList->where('semester', 14)->take(1)->value('ipk'), 2, '.', ',') : '0.00' }};
                    document.getElementById('skskValue').textContent = {{ $khsList->where('semester', 14)->count() > 0 ? $khsList->where('semester', 14)->take(1)->value('sks_total') : '0'}};
                    document.getElementById('semesterValue').textContent = '14';
                    if ({{ $irsList->where('semester', 14)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('irsButton').href = "{{ $irsList->where('semester', 14)->count() > 0 ? asset('storage/' . $irsList->where('semester', 14)->take(1)->value('file')) : '#' }}";
                        document.getElementById('irsButton').classList.remove('bg-blue-300');
                        document.getElementById('irsButton').classList.add('bg-blue-600');
                        document.getElementById('irsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('irsButton').href = "#";
                        document.getElementById('irsButton').classList.remove('bg-blue-600');
                        document.getElementById('irsButton').classList.add('bg-blue-300');
                        document.getElementById('irsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $khsList->where('semester', 14)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('khsButton').href = "{{ $khsList->where('semester', 14)->count() > 0 ? asset('storage/' . $khsList->where('semester', 14)->take(1)->value('file')) : '#' }}";
                        document.getElementById('khsButton').classList.remove('bg-blue-300');
                        document.getElementById('khsButton').classList.add('bg-blue-600');
                        document.getElementById('khsButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('khsButton').href = "#";
                        document.getElementById('khsButton').classList.remove('bg-blue-600');
                        document.getElementById('khsButton').classList.add('bg-blue-300');
                        document.getElementById('khsButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $pklList->where('semester', 14)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('pklButton').href = "{{ $pklList->where('semester', 14)->count() > 0 ? asset('storage/' . $pklList->where('semester', 14)->take(1)->value('file')) : '#' }}";
                        document.getElementById('pklButton').classList.remove('bg-blue-300');
                        document.getElementById('pklButton').classList.add('bg-blue-600');
                        document.getElementById('pklButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('pklButton').href = "#";
                        document.getElementById('pklButton').classList.remove('bg-blue-600');
                        document.getElementById('pklButton').classList.add('bg-blue-300');
                        document.getElementById('pklButton').setAttribute('disabled', 'true');
                    }
                    if ({{ $skripsiList->where('semester', 14)->count() > 0 ? 'true' : 'false' }}) {
                        document.getElementById('skripsiButton').href = "{{ $skripsiList->where('semester', 14)->count() > 0 ? asset('storage/' . $skripsiList->where('semester', 14)->take(1)->value('file')) : '#' }}";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-300');
                        document.getElementById('skripsiButton').classList.add('bg-blue-600');
                        document.getElementById('skripsiButton').removeAttribute('disabled');
                    }
                    else {
                        document.getElementById('skripsiButton').href = "#";
                        document.getElementById('skripsiButton').classList.remove('bg-blue-600');
                        document.getElementById('skripsiButton').classList.add('bg-blue-300');
                        document.getElementById('skripsiButton').setAttribute('disabled', 'true');
                    }
                }
            });
        });
    </script>
    
    
@endsection
