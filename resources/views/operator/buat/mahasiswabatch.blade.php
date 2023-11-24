@extends('partials.sidebar')
@section('container')
<div class="relative bg-indigo-200 dark:bg-indigo-500 p-7 sm:p-7 rounded-sm overflow-hidden mb-10 mt-10">
    <h1 class="text-2xl md:text-3xl text-slate-800 dark:text-slate-100 font-bold mb-1">Buat Akun Mahasiswa {{-- {{ Auth::user()->name }} --}} </h1>
    
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
            <form action="/buat/mahasiswa/csv" method="post" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 gap-8">
                    <!-- form fields -->

                    <div class="mb-2">
                        <div>
                            <label for="scan_csv" class="block text-grey-darker text-sm font-bold mb-2">Upload CSV Mahasiswa</label>
                            <input type="file" name="scan_csv" class="border rounded w-full py-2 px-3 text-white-darker @error('scan_csv') is-invalid @else  @enderror" id="scan_csv">
                            @error('scan_csv')
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
