@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-register w-100 m-auto">
            <h1 class="mb-3 fw-bold text-center">AcademicPro</h1>
            <form action="/register" method="post">
                @csrf
                <div class="form-floating">
                    <input type="text" name="nama" class="form-control rounded-top" id="nama" placeholder="Nama">
                    <label for="nama">Nama</label>
                </div>
                <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="email">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
                    <label for="password">Password</label>
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