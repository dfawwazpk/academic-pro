@extends('partials.sidebar')

@section('container')
<h1>Edit akun</h1>
<div class="row g-5">
  @if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif
  <form action="/edit-akun" method="post">
    @csrf
    <div class="col-md-7 col-lg-8">
      <div class="row g-3">

        <div class="col-12">
          <label for="nip" class="form-label">NIP</label>
          <input type="text" name="nip" class="form-control @error('nip') is-invalid @enderror" id="nip" placeholder="" value="{{ $nip }}" disabled>
          @error('nip')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-12">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="" value="{{ $nama }}">
          @error('nama')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-12">
          <label for="nama_lengkap" class="form-label">Email</label>
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="" value="{{ $email }}">
          @error('email')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-12">
          <label for="password" class="form-label">Password baru</label>
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="" value="">
          @error('password')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-12">
          <label for="password_confirmation" class="form-label">Konfirmasi password baru</label>
          <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="" value="">
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

      <button class="w-100 btn btn-primary btn-lg" type="submit">Simpan</button>
    </form>
  </div>
</div>
@endsection