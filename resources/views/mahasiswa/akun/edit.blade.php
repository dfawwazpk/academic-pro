@extends('partials.sidebar')

@section('container')
<div class="relative bg-indigo-200 dark:bg-indigo-500 p-7 sm:p-7 rounded-sm overflow-hidden mb-10 mt-10">
  <h1 class="text-2xl md:text-3xl text-slate-800 dark:text-slate-100 font-bold mb-1">Edit Profile {{-- {{ Auth::user()->name }} --}} </h1>
  
</div>

<div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-4 p-4 gap-5">
  <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-center p-10 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group  col-span-4 ">
  @if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  <div class="flex justify-center items-center ">
  <form action="/edit-akun" method="post" enctype="multipart/form-data">
    @csrf
    <div class="col-md-7 col-lg-8">
      <div class="row g-3">

        <div class="col-12">
          <label for="nip" class="form-label">NIM</label>
          <input type="text" name="nim" class="border rounded w-full py-2 px-3 text-black form-control @error('nim') is-invalid @enderror" id="nim" placeholder="" value="{{ $nim }}" disabled>
        </div>

        <div class="col-12">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" name="nama" class="border rounded w-full py-2 px-3 text-black form-control @error('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama Lengkap" value="{{ $nama }}">
          @error('nama')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-12">
          <label for="nama_lengkap" class="form-label">Email</label>
          <input type="email" name="email" class="border rounded w-full py-2 px-3 text-black form-control @error('email') is-invalid @enderror" id="email" placeholder="Masukkan Email" value="{{ $email }}">
          @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-12">
          <label for="angkatan" class="form-label">Angkatan</label>
          <input type="text" name="angkatan" class="border rounded w-full py-2 px-3 text-black form-control @error('angkatan') is-invalid @enderror" id="angkatan" placeholder="" value="{{ $angkatan }}" disabled>
        </div>

        <div class="col-12">
          <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
          <input type="date" name="tanggal_lahir" class="border rounded w-full py-2 px-3 text-black @error('tanggal_lahir') is-invalid @enderror" id="tanggal_lahir" placeholder="Masukkan Tanggal Lahir" value="{{ preg_replace('#(\d{2})/(\d{2})/(\d{4})\s(.*)#', '$1/$2/$3', $tanggal_lahir) }}">
          @error('tanggal_lahir')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-12">
          <label for="no_hp" class="form-label">Nomor Telepon</label>
          <input type="text" name="no_hp" class="border rounded w-full py-2 px-3 text-black form-control @error('nama') is-invalid @else  @enderror" id="no_hp" placeholder="Masukkan Nomor Telepon" value="{{ $no_hp }}">
          @error('no_hp')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-12">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" name="alamat" class="border rounded w-full py-2 px-3 text-black form-control @error('alamat') is-invalid @else  @enderror" id="alamat" placeholder="Masukkan Alamat" value="{{ $alamat }}">
          @error('alamat')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-12">
          <label for="provinsi" class="form-label">Provinsi</label>
          <select id="provinsi" name="provinsi" class="border rounded w-full py-2 px-3 text-black form-control @error('provinsi') @else  is-invalid @enderror" value="">
              @foreach ($provinsiList as $prov)
                  <option value="{{ $prov->kode_prov }}" {{ $provinsi==$prov->kode_prov ? 'selected' : ''}}>{{ $prov->nama_prov }}</option>
              @endforeach
          </select>
          @error('provinsi')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-12">
          <label for="kabupaten_kota" class="form-label">Kabupaten/Kota</label>
          <select id="kabupaten_kota" name="kabupaten_kota" class="border rounded w-full py-2 px-3 text-black form-control @error('kabupaten_kota') @else  is-invalid @enderror" value="">
              @foreach ($kabupaten_kotaList as $kabs)
                  <option value="{{ $kabs->kode_kab }}" {{ $kabupaten_kota==$kabs->kode_kab ? 'selected' : ''}}>{{ $kabs->nama_kab }}</option>
              @endforeach
          </select>
          @error('kabupaten_kota')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-12">
          <label for="password" class="form-label">Password baru</label>
          <input type="password" name="password" class="border rounded w-full py-2 px-3 text-black form-control @error('password') is-invalid @enderror" id="password" placeholder="" value="">
          @error('password')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-12">
          <label for="password_confirmation" class="form-label">Konfirmasi password baru</label>
          <input type="password" name="password_confirmation" class="border rounded w-full py-2 px-3 text-black form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="" value="">
          @error('password_confirmation')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-5">
          <label for="avatar" class="form-label">Foto profil</label>
          <input class="form-control" type="file" name="avatar" id="avatar">
          @error('avatar')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

      <hr class="my-4">
      <div class="flex justify-center">
      <button class="w-100 btn btn-primary btn-lg" type="submit">Simpan</button>
      </div>
    </form>
  </div>
</div>
</div>
</div>
@endsection