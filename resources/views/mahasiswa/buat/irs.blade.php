@extends('partials.sidebar')
@section('container')

<div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-4 p-4 gap-4">
    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-center p-10 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group col-span-4">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="flex justify-center items-center ">
            <form action="/buat/irs" method="post" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 gap-8">
                    <!-- form fields -->

                    <div class="mb-2">
                        <div>
                            <label for="semester" class="block text-grey-darker text-sm font-bold mb-2">Semester Aktif</label>
                            <input type="text" name="semester" class="border rounded w-full py-2 px-3 text-black @error('semester') is-invalid @else  @enderror" id="semester" placeholder="Masukkan semester aktif" value="{{ old('semester') }}">
                            @error('semester')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="sks" class="block text-grey-darker text-sm font-bold mb-2">Jumlah SKS Diambil</label>
                            <input type="text" name="sks" class="border rounded w-full py-2 px-3 text-black @error('sks') is-invalid @else  @enderror" id="sks" placeholder="Masukkan jumlah SKS kumulatif" value="{{ old('sks') }}">
                            @error('sks')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="mb-2">
                        <div>
                            <label for="scan_irs" class="block text-grey-darker text-sm font-bold mb-2">Upload scan IRS</label>
                            <input type="file" name="scan_irs" class="border rounded w-full py-2 px-3 text-white-darker @error('scan_irs') is-invalid @else  @enderror" id="scan_irs">
                            @error('scan_irs')
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