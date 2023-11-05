@extends('partials.sidebar')
@section('container')

<div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-4 p-4 gap-4">
    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-center p-10 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group col-span-4">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="flex justify-center items-center ">
            <form action="/buat/mahasiswa" method="post">
                @csrf
                <div class="grid grid-cols-1 gap-8">
                    <!-- form fields -->
                    <div class="mb-2">
                        <div>
                            <label for="nim" class="block text-grey-darker text-sm font-bold mb-2">NIM</label>
                            <input type="text" name="nim" class="border rounded w-full py-2 px-3 text-white-darker @error('nim') is-invalid @else  @enderror" id="nim" placeholder="Masukkan NIM" value="{{ old('nim') }}">
                            @error('nim')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="nama" class="block text-grey-darker text-sm font-bold mb-2">Nama Lengkap</label>
                            <input type="text" name="nama" class="border rounded w-full py-2 px-3 text-white-darker @error('nama') is-invalid @else  @enderror" id="nama" placeholder="Masukkan Nama Lengkap" value="{{ old('nama') }}">
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-2">
                        <div>
                            <label for="email" class="block text-grey-darker text-sm font-bold mb-2">Email</label>
                            <input type="email" name="email" class="border rounded w-full py-2 px-3 text-white-darker @error('email') is-invalid @else  @enderror" id="email" placeholder="Masukkan Email" value="{{ old('email') }}">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="angkatan" class="block text-grey-darker text-sm font-bold mb-2">Angkatan</label>
                            <select id="angkatan" name="angkatan" class="border rounded w-full py-2 px-3 text-white-darker @error('angkatan') @else  is-invalid @enderror" value="{{ old('angkatan') }}">
                                <option value="" selected disabled>Pilih angkatan</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                            </select>
                            @error('angkatan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="status" class="block text-grey-darker text-sm font-bold mb-2">Status</label>
                            <select id="status" name="status" class="border rounded w-full py-2 px-3 text-white-darker @error('status') @else  is-invalid @enderror" value="{{ old('status') }}">
                                <option value="" selected disabled>Pilih status</option>
                                @foreach ($status as $stat)
                                    <option value="{{ $stat->id }}"> {{ $stat->name }}</option>
                                @endforeach
                            </select>
                            @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="jalur_masuk" class="block text-grey-darker text-sm font-bold mb-2">Jalur masuk</label>
                            <select id="jalur_masuk" name="jalur_masuk" class="border rounded w-full py-2 px-3 text-white-darker @error('jalur_masuk') @else  is-invalid @enderror" value="{{ old('jalur_masuk') }}">
                                <option value="" selected disabled>Pilih jalur masuk</option>
                                @foreach ($jalur_masuk as $jalur)
                                    <option value="{{ $jalur->id }}"> {{ $jalur->name }}</option>
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
                            <select id="dosen_wali" name="dosen_wali" class="border rounded w-full py-2 px-3 text-white-darker @error('dosen_wali') @else  is-invalid @enderror" value="{{ old('dosen_wali') }}">
                                <option value="" selected disabled>Pilih dosen wali</option>
                                @foreach ($dosen_wali as $doswal)
                                    <option value="{{ $doswal->id }}"> {{ $doswal->nama }}</option>
                                @endforeach
                            </select>
                            @error('dosen_wali')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="btn btn-primary">Buat</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection