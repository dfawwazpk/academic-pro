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
            <form action="/buat/khs" method="post" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 gap-8">
                    <!-- form fields -->

                    <div class="mb-2">
                        <div>
                            <label for="sks_semester" class="block text-grey-darker text-sm font-bold mb-2">Semester Aktif</label>
                            <input type="text" name="sks_semester" class="border rounded w-full py-2 px-3 text-white-darker @error('sks_semester') is-invalid @else  @enderror" id="sks_semester" placeholder="Masukkan jumlah SKS semester" value="{{ old('sks_semester') }}">
                            @error('sks_semester')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="sks_total" class="block text-grey-darker text-sm font-bold mb-2">Jumlah SKS Diambil</label>
                            <input type="text" name="sks_total" class="border rounded w-full py-2 px-3 text-white-darker @error('sks_total') is-invalid @else  @enderror" id="sks_total" placeholder="Masukkan jumlah SKS kumulatif" value="{{ old('sks_total') }}">
                            @error('sks_total')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="mb-2">
                        <div>
                            <label for="scan_khs" class="block text-grey-darker text-sm font-bold mb-2">Upload scan IRS</label>
                            <input type="file" name="scan_khs" class="border rounded w-full py-2 px-3 text-white-darker @error('scan_khs') is-invalid @else  @enderror" id="scan_khs">
                            @error('scan_khs')
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