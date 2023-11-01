@extends('layouts.main')

@section('container')
<h1>Edit akun</h1>
<div class="row g-5">
  <form action="/edit-akun" method="post">
    @csrf
    <div class="col-md-7 col-lg-8">
      <div class="row g-3">

        <div class="col-12">
          <label for="nip" class="form-label">NIP</label>
          <input type="text" name="nip" class="form-control @error('nip') is-invalid @enderror" id="nip" placeholder="" value="{{ auth()->user()->nip }}" disabled>
          @error('nip')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-12">
          <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
          <input type="text" name="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" placeholder="" value="{{ auth()->user()->nama_lengkap }}">
          @error('nama_lengkap')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-12">
          <label for="nama_lengkap" class="form-label">Email</label>
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="" value="{{ auth()->user()->email }}">
          @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-5">
          <label for="formFile" class="form-label">Unggah foto profil</label>
          <input class="form-control" type="file" id="formFile">
        </div>
      <hr class="my-4">

      <button class="w-100 btn btn-primary btn-lg" type="submit">Simpan</button>
    </form>
  </div>
</div>
@endsection