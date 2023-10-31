@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-3">
        <main class="form-signin w-100 m-auto">
            <h1 class="mb-3 fw-bold text-center">AcademicPro</h1>
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <form action="/login" method="post">
                @csrf
                <div class="form-floating">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus value="{{ old('email') }}">
                    <label for="email">Email</label>
                    @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    <label for="password">Password</label>
                </div>
                <button class="btn btn-dark w-100 py-2" type="submit">Login</button>
                <div class="d-flex">
                    <hr class="my-auto flex-grow-1">
                    <div class="px-4 mt-2 mb-2">Belum punya akun?</div>
                    <hr class="my-auto flex-grow-1">
                </div>
                <a href="/register" class="btn btn-outline-dark w-100 py-2">Register</a>
            </form>
        </main>
    </div>
</div>

@endsection