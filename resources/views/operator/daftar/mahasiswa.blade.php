@extends('partials.sidebar')

@section('container')
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>


<div class="flex items-center mt-6 p-2">
    <a href="/dashboard" class="inline-block">
        <svg class="w-5 h-5 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13"/>
        </svg>
    </a>            
    <h1 class="text-xl md:text-3xl text-black font-bold mb-1 p-1">Daftar Mahasiswa</h1>
</div>

 
<div class="flex justify-end gap-4 p-4">
    <a href="/buat/mahasiswa" class="btn btn-sm text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-full hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
        <span>
            Tambah Akun
        </span>
    </a>

</div>




{{-- Nav Diatas Tabel --}}
<form action="/daftar/mahasiswa">
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

                                <th scope="col-span" class="px-4 py-3.5 text-sm font-normal text-center text-gray-500 dark:text-gray-400" colspan="2">
                                    <div class="flex items-center justify-center">
                                        <span>Aksi</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">

                        @foreach ($mahasiswaList as $mahasiswa)
                        <body x-data="{ openModal_{{ $mahasiswa->id }}: false }">
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
                             <!-- Add this form inside your foreach loop where the button is -->
                            <td>
                           <!-- Code 2: Form Triggering Modal -->
                           <form onsubmit="event.preventDefault(); openStatusChangeModal('{{ $mahasiswa->id }}')" class="inline">
                                @csrf
                                <button type="submit" class="btn btn-sm text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-full hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                                    <span>Ganti Status</span>
                                </button>
                             </form>
                        

                            <!-- Modal Content -->
                            <div id="statusChangeModal_{{ $mahasiswa->id }}" class="hidden fixed inset-0 overflow-y-auto">
                                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                    </div>
                                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                                    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                        <!-- Modal Header -->
                                        <div class="bg-gray-800 text-white py-4 px-6">
                                            <div class="flex items-center justify-center text-green-500 mb-4">
                                            </div>
                                            <p class="text-center text-2xl">Ganti Status</p>
                                        </div>
                                        <!-- Modal Body -->
                                        <form action="{{ route('mahasiswa.changeStatus', ['id' => $mahasiswa->id]) }}" method="post" class="p-6">
                                            @csrf
                                            <select name="newStatus" class="mx-auto w-full border rounded-full py-2 px-3 text-black mb-4">
                                                <option value="1">Aktif</option>
                                                <option value="2">Cuti</option>
                                                <option value="3">Mangkir</option>
                                                <option value="4">DO</option>
                                                <option value="5">Undur Diri</option>
                                                <option value="6">Lulus</option>
                                                <option value="7">Meninggal Dunia</option>
                                            </select>
                                            <!-- Modal Footer -->
                                            <div class="flex justify-end">
                                                <button type="button" onclick="closeStatusChangeModal('{{ $mahasiswa->id }}')" class="mr-2 px-4 py-2 bg-gray-300 text-gray-700 rounded-full">Batal</button>                                                <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded-full">Ya, Ganti Status</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            </td>
                            <td> 
                        <!-- Code 3: Form Triggering Delete Modal -->
                        <form onsubmit="event.preventDefault(); openDeleteModal('{{ $mahasiswa->id }}')" class="inline">
                            @csrf
                            <button type="submit" class="btn btn-sm text-sm text-red-500 capitalize transition-colors duration-200 bg-white border rounded-full hover:text-red-700 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                                <span>Hapus Akun</span>
                            </button>
                        </form>

                        <!-- Delete Modal Content -->
                        <div id="deleteModal_{{ $mahasiswa->id }}" class="hidden fixed inset-0 overflow-y-auto">
                            <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                </div>
                                <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                                <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                    <!-- Modal Header -->
                                    <div class="bg-gray-800 text-white py-4 px-6">
                                        <div class="flex items-center justify-center text-red-500 mb-4">
                                        </div>
                                        <p class="text-center text-2xl">Hapus Akun</p>
                                    </div>
                                    <!-- Modal Body -->
                                    <form action="{{ route('delete.mahasiswa', $mahasiswa->id) }}" method="post" class="p-6">
                                        @csrf
                                        @method('DELETE')
                                        <!-- Modal Footer -->
                                        <div class="flex justify-center"> <!-- Center the buttons -->
                                            <button type="button" onclick="closeDeleteModal('{{ $mahasiswa->id }}')" class="mr-2 px-4 py-2 bg-gray-300 text-gray-700 rounded-full">Batal</button>
                                            <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-full">Ya, Hapus Akun</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                            <!-- JavaScript to Control Modal -->
                            <script>
                                function openStatusChangeModal(id) {
                                    document.getElementById('statusChangeModal_' + id).classList.remove('hidden');
                                }
                            
                                function closeStatusChangeModal(id) {
                                    document.getElementById('statusChangeModal_' + id).classList.add('hidden');
                                }
                            </script>
                            <script>
                                function openDeleteModal(id) {
                                    document.getElementById('deleteModal_' + id).classList.remove('hidden');
                                }

                                function closeDeleteModal(id) {
                                    document.getElementById('deleteModal_' + id).classList.add('hidden');
                                }
                            </script>


                                {{-- Backup 
                            <form action="{{ route('mahasiswa.changeStatus', ['id' => $mahasiswa->id]) }}" method="post" class="inline">
                                @csrf
                                <select name="newStatus" class="border rounded-full py-2 px-3 text-black">
                                    <option value="1">Aktif</option>
                                    <option value="2">Cuti</option>
                                    <option value="3">Mangkir</option>
                                    <option value="4">DO</option>
                                    <option value="5">Undur Diri</option>
                                    <option value="6">Lulus</option>
                                    <option value="7">Meninggal Dunia</option>
                                </select>
                                <button type="submit" class="btn btn-sm text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-full hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                                    <span>Ganti Status</span>
                                </button>
                            </form>
                             </td>
                             --}}
                            
                            
                            
                            {{-- Backup 
                            <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                                <div class="inline-flex items-center gap-x-3">
                                    <form action="{{ route('mahasiswa.changeStatus', $mahasiswa->id) }}" method="post">
                                        @csrf
                                        @method('post')
                                        <select name="newStatus" class="form-select">
                                            <option value="1">Aktif</option>
                                            <option value="2">Cuti</option>
                                            <option value="3">Mangkir</option>
                                            <option value="4">DO</option>
                                            <option value="5">Undur Diri</option>
                                            <option value="6">Lulus</option>
                                            <option value="7">Meninggal Dunia</option>
                                        </select>
                                        <button type="submit" class="btn btn-sm text-sm text-gray-700 capitalize transition-colors duration-200 ...">
                                            <span>Ganti Status</span>
                                        </button>
                                    </form>
                                </div>
                                --}}

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
<script>
    function openModal() {
        document.getElementById('statusChangeModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('statusChangeModal').classList.add('hidden');
    }
</script>
@endsection
