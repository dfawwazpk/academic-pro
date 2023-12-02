@extends('partials.sidebar')
@section('container')
<div class="relative bg-indigo-200 dark:bg-indigo-500 p-7 sm:p-7 rounded-sm overflow-hidden mb-10 mt-10">
    <h1 class="text-2xl md:text-3xl text-slate-800 dark:text-slate-100 font-bold mb-1">Buat Akun Mahasiswa {{-- {{ Auth::user()->name }} --}} </h1>
    
</div>
<div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-4 p-4 gap-5">
    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-center p-10 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group  col-span-4 ">
        @if (session()->has('success'))
        {{-- INI BUAT POP UP KETIKA KLIK BUAT (MODAL) --}}
        <input type="checkbox" id="my_modal_7" class="modal-toggle" checked />
        <div class="modal bg-gray-800 text-white" role="dialog">
            <div class="modal-box bg-gray-700">
                <div class="flex items-center justify-center text-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="text-[#059669] mx-auto h-11 rounded-full bg-[#D1FAE5] w-11" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M5 13l4 4L19 7" />
                      </svg>
                </div>
                <p class="py-4 text-center text-2xl">{{ session('success') }}</p>
            </div>
            <label class="modal-backdrop" for="my_modal_7">Close</label>
        </div>
        @endif
        <div class="flex justify-center items-center w-64">
            <form action="/buat/mahasiswa" method="post">
                @csrf
                <div class="grid grid-cols-1 gap-8">
                    <!-- form fields -->
                    <div class="mb-2">
                        <div>
                            <label for="nim" class="block text-grey-darker text-sm font-bold mb-2">NIM</label>
                            <input type="text" name="nim" class="border rounded w-full py-2 px-3 text-black @error('nim') is-invalid @else  @enderror" id="nim" placeholder="Masukkan NIM" value="{{ old('nim') }}" maxlength="14">
                            @error('nim')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="nama" class="block text-grey-darker text-sm font-bold mb-2">Nama Lengkap</label>
                            <input type="text" name="nama" class="border rounded w-full py-2 px-3 text-black @error('nama') is-invalid @else  @enderror" id="nama" placeholder="Masukkan Nama Lengkap" value="{{ old('nama') }}">
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="angkatan" class="block text-grey-darker text-sm font-bold mb-2">Angkatan</label>
                            <select id="angkatan" name="angkatan" class="border rounded w-full py-2 px-3 text-black @error('angkatan') @else  is-invalid @enderror"">
                                <option value="" {{ old('angkatan')=='' ? 'selected' : ''}} disabled>Pilih angkatan</option>
                                <option value="2023" {{ old('angkatan')=='2023' ? 'selected' : ''}}>2023</option>
                                <option value="2022" {{ old('angkatan')=='2022' ? 'selected' : ''}}>2022</option>
                                <option value="2021" {{ old('angkatan')=='2021' ? 'selected' : ''}}>2021</option>
                                <option value="2020" {{ old('angkatan')=='2020' ? 'selected' : ''}}>2020</option>
                                <option value="2019" {{ old('angkatan')=='2019' ? 'selected' : ''}}>2019</option>
                                <option value="2018" {{ old('angkatan')=='2018' ? 'selected' : ''}}>2018</option>
                                <option value="2017" {{ old('angkatan')=='2017' ? 'selected' : ''}}>2017</option>
                                <option value="2016" {{ old('angkatan')=='2016' ? 'selected' : ''}}>2016</option>
                            </select>
                            @error('angkatan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="status" class="block text-grey-darker text-sm font-bold mb-2">Status</label>
                            <select id="status" name="status" class="border rounded w-full py-2 px-3 text-black @error('status') @else  is-invalid @enderror" value="" disabled>
                                <option value="1" selected>Aktif</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="jalur_masuk" class="block text-grey-darker text-sm font-bold mb-2">Jalur masuk</label>
                            <select id="jalur_masuk" name="jalur_masuk" class="border rounded w-full py-2 px-3 text-black @error('jalur_masuk') @else  is-invalid @enderror">
                                <option value="" {{ old('jalur_masuk')=='' ? 'selected' : ''}} disabled>Pilih jalur masuk</option>
                                @foreach ($jalur_masuk as $jalur)
                                    <option value="{{ $jalur->id }}" {{ old('jalur_masuk')==$jalur->id ? 'selected' : ''}}> {{ $jalur->name }}</option>
                                @endforeach
                            </select>
                            @error('jalur_masuk')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="dosen_wali" class="block text-grey-darker text-sm font-bold mb-2">Dosen wali</label>
                            <select id="dosen_wali" name="dosen_wali" class="border rounded w-full py-2 px-3 text-black @error('dosen_wali') @else  is-invalid @enderror" value="{{ old('dosen_wali') }}">
                                <option value="" {{ old('dosen_wali')=='' ? 'selected' : ''}} disabled>Pilih dosen wali</option>
                                @foreach ($dosen_wali as $doswal)
                                    <option value="{{ $doswal->id }}" {{ old('dosen_wali')==$doswal->id ? 'selected' : ''}}> {{ $doswal->nama }}</option>
                                @endforeach
                            </select>
                            @error('dosen_wali')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="flex justify-center gap-2">
                        <button type="submit" class="btn btn-primary">Buat</button>
                        <a href="/daftar/mahasiswa" class="btn btn-error">Cancel</a>
                        <a href="/buat/mahasiswa/csv" class="btn btn-neutral">Upload</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
