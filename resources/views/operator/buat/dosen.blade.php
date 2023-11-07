@extends('partials.sidebar')
@section('container')
<div class="relative bg-indigo-200 dark:bg-indigo-500 p-7 sm:p-7 rounded-sm overflow-hidden mb-10 mt-10">
    <h1 class="text-2xl md:text-3xl text-slate-800 dark:text-slate-100 font-bold mb-1">Buat Akun Dosen {{-- {{ Auth::user()->name }} --}} </h1>
    
</div>
<div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-4 p-4 gap-4">
    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-center p-10 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group col-span-4">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="flex justify-center items-center ">
            <form action="/buat/dosen" method="post">
                @csrf
                <div class="grid grid-cols-1 gap-8">
                    <!-- form fields -->
                    <div class="mb-2">
                        <div>
                            <label for="nip" class="block text-grey-darker text-sm font-bold mb-2">NIP</label>
                            <input type="text" name="nip" class="border rounded w-full py-2 px-3 text-black @error('nip') is-invalid @else  @enderror" id="nip" placeholder="Masukkan NIP" value="{{ old('nip') }}">
                            @error('nip')
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
                            <label for="email" class="block text-grey-darker text-sm font-bold mb-2">Email</label>
                            <input type="email" name="email" class="border rounded w-full py-2 px-3 text-black @error('email') is-invalid @else  @enderror" id="email" placeholder="Masukkan Email" value="{{ old('email') }}">
                            @error('email')
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