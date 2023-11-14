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
  <form action="/edit-akun" method="post">
    @csrf
    <div class="col-md-7 col-lg-8">
      <div class="row g-3">

        <div class="col-12">
          <label for="nip" class="form-label">NIP</label>
          <input type="text" name="nip" class="border rounded w-full py-2 px-3 text-black form-control @error('nip') is-invalid @enderror" id="nip" placeholder="" value="{{ $nip }}" disabled>
          @error('nip')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-12">
          <label for="nama" class="form-label">Nama Lengkap</label>
          <input type="text" name="nama" class="border rounded w-full py-2 px-3 text-black form-control @error('nama') is-invalid @enderror" id="nama" placeholder="" value="{{ $nama }}">
          @error('nama')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-12">
          <label for="nama_lengkap" class="form-label">Email</label>
          <input type="email" name="email" class="border rounded w-full py-2 px-3 text-blackform-control @error('email') is-invalid @enderror" id="email" placeholder="" value="{{ $email }}">
          @error('email')
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