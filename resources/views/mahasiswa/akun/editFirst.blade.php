@extends('partials.sidebar')
@section('container')

<div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-4 p-4 gap-4">
    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-center p-10 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group col-span-4">
        @if (session()->has('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('warning') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="flex justify-center items-center ">
            <form action="/first-time-login" method="post">
                @csrf
                <div class="grid grid-cols-1 gap-8">
                    <!-- form fields -->
                    <div class="mb-2">
                        <div>
                            <label for="nim" class="block text-grey-darker text-sm font-bold mb-2">NIM</label>
                            <input type="text" name="nim" class="border rounded w-full py-2 px-3 text-white-darker" id="nim" placeholder="" value="{{ $nim }}" disabled>
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="nama" class="block text-grey-darker text-sm font-bold mb-2">Nama Lengkap</label>
                            <input type="text" name="nama" class="border rounded w-full py-2 px-3 text-white-darker @error('nama') is-invalid @else  @enderror" id="nama" placeholder="Masukkan Nama Lengkap" value="{{ $nama }}">
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="angkatan" class="block text-grey-darker text-sm font-bold mb-2">Angkatan</label>
                            <input type="text" name="angkatan" class="border rounded w-full py-2 px-3 text-white-darker" id="angkatan" placeholder="" value="{{ $angkatan }}" disabled>
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="tanggal_lahir" class="block text-grey-darker text-sm font-bold mb-2">Tanggal Lahir</label>
                            {{-- <input datepicker type="text" name="tanggal_lahir" class="border rounded w-full py-2 px-3 text-white-darker" id="tanggal_lahir" placeholder="" value="{{ old('tanggal_lahir') }}"> --}}
                            <input type="date" name="tanggal_lahir" class="border rounded w-full py-2 px-3 text-white-darker" id="tanggal_lahir" placeholder="" value="{{ old('tanggal_lahir') }}">
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="no_hp" class="block text-grey-darker text-sm font-bold mb-2">Nomor Telepon</label>
                            <input type="text" name="no_hp" class="border rounded w-full py-2 px-3 text-white-darker @error('nama') is-invalid @else  @enderror" id="no_hp" placeholder="Masukkan Nomor Telepon" value="{{ old('no_hp') }}">
                            @error('no_hp')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="alamat" class="block text-grey-darker text-sm font-bold mb-2">Alamat</label>
                            <input type="text" name="alamat" class="border rounded w-full py-2 px-3 text-white-darker @error('alamat') is-invalid @else  @enderror" id="alamat" placeholder="Masukkan Alamat" value="{{ old('alamat') }}">
                            @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="provinsi" class="block text-grey-darker text-sm font-bold mb-2">Provinsi</label>
                            <select id="provinsi" name="provinsi" class="border rounded w-full py-2 px-3 text-white-darker @error('provinsi') @else  is-invalid @enderror" value="{{ old('provinsi') }}">
                                <option value="" selected disabled>Pilih provinsi</option>
                                @foreach ($provinsi as $prov)
                                    <option value="{{ $prov->kode_prov }}"> {{ $prov->nama_prov }}</option>
                                @endforeach
                            </select>
                            @error('provinsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="kabupaten_kota" class="block text-grey-darker text-sm font-bold mb-2">Kabupaten/Kota</label>
                            <select id="kabupaten_kota" name="kabupaten_kota" class="border rounded w-full py-2 px-3 text-white-darker @error('kabupaten_kota') @else  is-invalid @enderror" value="{{ old('kabupaten_kota') }}">
                                <option value="" selected disabled>Pilih kabupaten/kota</option>
                                @foreach ($kabupaten_kota as $kabs)
                                    <option value="{{ $kabs->kode_kab }}"> {{ $kabs->nama_kab }}</option>
                                @endforeach
                            </select>
                            @error('provinsi')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="password" class="block text-grey-darker text-sm font-bold mb-2">Password</label>
                            <input type="password" name="password" class="border rounded w-full py-2 px-3 text-white-darker @error('password') is-invalid @else  @enderror" id="password" placeholder="Masukkan password baru" value="">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="password_confirmation" class="block text-grey-darker text-sm font-bold mb-2">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" class="border rounded w-full py-2 px-3 text-white-darker @error('password_confirmation') is-invalid @else  @enderror" id="password_confirmation" placeholder="Konfirmasi password baru" value="">
                            @error('password_confirmation')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection