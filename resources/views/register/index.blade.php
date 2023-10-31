@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-register w-100 m-auto">
            <h1 class="mb-3 fw-bold text-center">AcademicPro</h1>
            <form action="/register" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" name="nip" class="form-control rounded-top @error('nip') is-invalid @enderror" id="nip" placeholder="NIP" value="{{ old('nip') }}">
                    <label for="nip">NIP</label>
                    @error('nip')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" name="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror" id="nama_lengkap" placeholder="Nama" value="{{ old('nama_lengkap') }}">
                    <label for="nama_lengkap">Nama</label>
                    @error('nama_lengkap')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}"">
                    <label for="email">Email</label>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password">
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-dark w-100 py-2" type="submit">Register</button>
                <div class="d-flex">
                    <hr class="my-auto flex-grow-1">
                    <div class="px-4 mt-2 mb-2">Sudah punya akun?</div>
                    <hr class="my-auto flex-grow-1">
                </div>
                <a href="/login" class="btn btn-outline-dark w-100 py-2">Login</a>
            </form>
        </main>
    </div>
</div>

@endsection