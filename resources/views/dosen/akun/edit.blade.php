@extends('partials.sidebar')

@section('container')

<div class="flex items-center mt-6 p-2">
  <a href="/dashboard" class="inline-block">
      <svg class="w-5 h-5 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13"/>
      </svg>
  </a>            
  <h1 class="text-xl md:text-3xl text-black font-bold mb-1 p-1">Edit Akun</h1>
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
  <div class="flex justify-center items-center ">
  <form action="/edit-akun" method="post" enctype="multipart/form-data">
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
          <input type="email" name="email" class="border rounded w-full py-2 px-3 text-black form-control @error('email') is-invalid @enderror" id="email" placeholder="" value="{{ $email }}">
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