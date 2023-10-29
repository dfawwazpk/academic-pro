@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-signin w-100 m-auto">
            <h1 class="mb-3 fw-bold text-center">AcademicPro</h1>
            <form>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="btn btn-dark w-100 py-2" type="submit">Login</button>
                <div class="d-flex">
                    <hr class="my-auto flex-grow-1">
                    <div class="px-4 mt-2 mb-2">Belum punya akun?</div>
                    <hr class="my-auto flex-grow-1">
                </div>
                <button class="btn btn-light w-100 py-2" href="/register">Register</button>
            </form>
        </main>
    </div>
</div>

@endsection