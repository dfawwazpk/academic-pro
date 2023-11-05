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
                            <label for="semester" class="block text-grey-darker text-sm font-bold mb-2">Semester</label>
                            <select id="semester" name="semester" class="border rounded w-full py-2 px-3 text-white-darker @error('semester') @else  is-invalid @enderror" value="{{ old('semester') }}">
                                <option value="" selected disabled>Pilih semester</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                            </select>
                            @error('semester')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="sks" class="block text-grey-darker text-sm font-bold mb-2">Jumlah SKS diambil</label>
                            <input type="text" name="sks" class="border rounded w-full py-2 px-3 text-white-darker @error('sks') is-invalid @else  @enderror" id="sks" placeholder="Masukkan jumlah SKS yang diambil" value="{{ old('sks') }}">
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