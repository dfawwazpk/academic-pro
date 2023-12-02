@extends('partials.sidebar')
@section('container')
<head>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-4 p-4 gap-4">
    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-center p-10 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group col-span-4">
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
        <div class="flex justify-center items-center ">
            <form action="/first-time-login" method="post">
                @csrf
                <div class="grid grid-cols-1 gap-8">
                    <!-- form fields -->
                    <div class="mb-2">
                        <div>
                            <label for="nim" class="block text-grey-darker text-sm font-bold mb-2">NIM</label>
                            <input type="text" name="nim" class="border rounded w-full py-2 px-3 text-black" id="nim" placeholder="" value="{{ $nim }}" disabled>
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="nama" class="block text-grey-darker text-sm font-bold mb-2">Nama Lengkap</label>
                            <input type="text" name="nama" class="border rounded w-full py-2 px-3 text-black @error('nama') is-invalid @else  @enderror" id="nama" placeholder="Masukkan Nama Lengkap" value="{{ $nama }}">
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="email" class="block text-grey-darker text-sm font-bold mb-2">Email</label>
                            <input type="email" name="email" class="border rounded w-full py-2 px-3 text-black @error('email') is-invalid @else  @enderror" id="email" placeholder="Masukkan Email" value="">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="angkatan" class="block text-grey-darker text-sm font-bold mb-2">Angkatan</label>
                            <input type="text" name="angkatan" class="border rounded w-full py-2 px-3 text-black" id="angkatan" placeholder="" value="{{ $angkatan }}" disabled>
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="tanggal_lahir" class="block text-grey-darker text-sm font-bold mb-2">Tanggal Lahir</label>
                            {{-- <input datepicker type="text" name="tanggal_lahir" class="border rounded w-full py-2 px-3 text-white-darker" id="tanggal_lahir" placeholder="" value="{{ old('tanggal_lahir') }}"> --}}
                            <input type="date" name="tanggal_lahir" class="border rounded w-full py-2 px-3 text-black @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" placeholder="" value="{{ old('tanggal_lahir') }}">
                            @error('tanggal_lahir')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="no_hp" class="block text-grey-darker text-sm font-bold mb-2">Nomor Telepon</label>
                            <input type="text" name="no_hp" class="border rounded w-full py-2 px-3 text-black @error('no_hp') is-invalid @else  @enderror" id="no_hp" placeholder="Masukkan Nomor Telepon" value="{{ old('no_hp') }}">
                            @error('no_hp')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="alamat" class="block text-grey-darker text-sm font-bold mb-2">Alamat</label>
                            <input type="text" name="alamat" class="border rounded w-full py-2 px-3 text-black @error('alamat') is-invalid @else  @enderror" id="alamat" placeholder="Masukkan Alamat" value="{{ old('alamat') }}">
                            @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="provinsi" class="block text-grey-darker text-sm font-bold mb-2">Provinsi</label>
                            <select id="provinsi" name="provinsi" class="border rounded w-full py-2 px-3 text-black @error('provinsi') @else  is-invalid @enderror" value="">
                                <option value="" {{ old('provinsi')=='' ? 'selected' : ''}} disabled>Pilih provinsi</option>
                                @foreach ($provinsi as $prov)
                                    <option value="{{ $prov->kode_prov }} {{ old('provinsi')==$prov->kode_prov ? 'selected' : ''}}"> {{ $prov->nama_prov }}</option>
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
                            <select id="kabupaten_kota" name="kabupaten_kota" class="border rounded w-full py-2 px-3 text-black @error('kabupaten_kota') @else  is-invalid @enderror" value="">
                                <option value="" {{ old('kabupaten_kota')=='' ? 'selected' : ''}} disabled>Pilih kabupaten/kota</option>
                                @foreach ($kabupaten_kota as $kabs)
                                    <option value="{{ $kabs->kode_kab }} {{ old('kabupaten_kota')==$kabs->kode_kab ? 'selected' : ''}}"> {{ $kabs->nama_kab }}</option>
                                @endforeach
                            </select>
                            @error('kabupaten_kota')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="password" class="block text-grey-darker text-sm font-bold mb-2">Password</label>
                            <input type="password" name="password" class="border rounded w-full py-2 px-3 text-black @error('password') is-invalid @else  @enderror" id="password" placeholder="Masukkan password baru" value="">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="password_confirmation" class="block text-grey-darker text-sm font-bold mb-2">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" class="border rounded w-full py-2 px-3 text-black @error('password_confirmation') is-invalid @else  @enderror" id="password_confirmation" placeholder="Konfirmasi password baru" value="">
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
<script>
    // Add jQuery script to handle the dynamic population of Kabupaten/Kota dropdown based on the selected Provinsi
    $(document).ready(function () {
        $('#provinsi').change(function () {
            var provinsiValue = $(this).val();

            // Make an AJAX request to fetch Kabupaten/Kota data based on the selected Provinsi
            $.ajax({
                type: 'GET',
                url: '/getKabupatenKota/' + provinsiValue,
                success: function (data) {
                    // Clear existing options
                    $('#kabupaten_kota').empty();

                    // Add new options based on the fetched data
                    $.each(data, function (key, value) {
                        $('#kabupaten_kota').append('<option value="' + value.kode_kab + '">' + value.nama_kab + '</option>');
                    });
                },
                error: function (xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    });
</script>

@endsection
