@extends('partials.sidebar')
@section('container')

<div class="flex items-center mt-6 p-2">
    <a href="/riwayat/skripsi" class="inline-block">
        <svg class="w-5 h-5 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 8 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 1 1.3 6.326a.91.91 0 0 0 0 1.348L7 13"/>
        </svg>
    </a>            
    <h1 class="text-xl md:text-3xl text-black font-bold mb-1 p-1">Buat Skripsi</h1>
</div>

<div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-4 p-4 gap-4">
    <div class="bg-blue-500 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-center p-10 border-b-4 border-blue-600 dark:border-gray-600 text-white font-medium group col-span-4">
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
        <form action="/buat/skripsi" method="post" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 gap-8">
                <div class="mb-2">
                    <div>
                    <h1 class="block text-grey-darker text-sm font-bold mb-2">Semester</h1>
                    <div>
                        <select name="semester" id="semester" value="" class="input input-ghost w-full max-w-">
                            <option value="1" {{ $semester=='1' ? 'selected' : ''}}>1</option>
                            <option value="2" {{ $semester=='2' ? 'selected' : ''}}>2</option>
                            <option value="3" {{ $semester=='3' ? 'selected' : ''}}>3</option>
                            <option value="4" {{ $semester=='4' ? 'selected' : ''}}>4</option>
                            <option value="5" {{ $semester=='5' ? 'selected' : ''}}>5</option>
                            <option value="6" {{ $semester=='6' ? 'selected' : ''}}>6</option>
                            <option value="7" {{ $semester=='7' ? 'selected' : ''}}>7</option>
                            <option value="8" {{ $semester=='8' ? 'selected' : ''}}>8</option>
                            <option value="8" {{ $semester=='9' ? 'selected' : ''}}>9</option>
                            <option value="9" {{ $semester=='10' ? 'selected' : ''}}>10</option>
                            <option value="10" {{ $semester=='11' ? 'selected' : ''}}>11</option>
                            <option value="11" {{ $semester=='12' ? 'selected' : ''}}>12</option>
                            <option value="12" {{ $semester=='13' ? 'selected' : ''}}>13</option>
                            <option value="13" {{ $semester=='14' ? 'selected' : ''}}>14</option>
                        </select>
                    </div>
                    @error('semester')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-2">
                    <h1 class="block text-grey-darker text-sm font-bold mb-2">Nilai</h1>
                    <div>
                        <input type="text" name="nilai" id="nilai" placeholder="Masukkan nilai" value="{{ old('nilai') }}" class="input border rounded w-full py-2 px-3 text-black" />
                    </div>
                    @error('nilai')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-2">
                    <h1 class="block text-grey-darker text-sm font-bold mb-2">Unggah Berita Acara</h1>
                    <div>
                        <input type="file" name="scan_skripsi" id="scan_skripsi" class="file-input file-input-bordered w-full max-w-xs text-black" />
                    </div>
                    @error('scan_skripsi')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                {{-- ini tinggal nambahin kolom tanggal sidang di db 
                <div class="mb-2">
                    <label for="tanggal_sidang" class="form-label">Tanggal Sidang</label>
                    <input type="date" name="tanggal_sidang" class="border rounded w-full py-2 px-3 text-black @error('tanggal_sidang') is-invalid @enderror" id="tanggal_sidang" placeholder="Masukkan Tanggal sidang" value="{{ old('tanggal_sidang') }}">
                    @error('tanggal_sidang')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                --}}
                  <div class="flex justify-center gap-2">
                    <button type="submit" class="btn btn-primary">Simpan</button>

                    <a href="/riwayat/irs" class="btn btn-error">Cancel</a>
                </div>
    </div>
</form>

@endsection