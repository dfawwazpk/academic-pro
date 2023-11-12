@extends('partials.sidebar')
@section('container')

<div class="sm:p-6 mb-4">
    <h1 class="text-2xl md:text-3xl text-black font-bold mb-1">Input Skripsi</h1>
</div>

<form action="/buat/skripsi" method="post" enctype="multipart/form-data">
    @csrf
    <div class="grid grid-cols-3 grid-rows-3 p-10">
        <div class="row-start-1 col-span-2 font-bold">Status
            <div class="grid w-[28rem] grid-cols-3 gap-2 rounded-xl bg-gray-200 p-2">
                <div>
                    <input type="radio" name="status_skripsi" id="1" value="Belum" class="peer hidden" checked />
                    <label for="1" class="block cursor-pointer select-none rounded-xl p-2 text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white">Belum</label>
                </div>
        
                <div>
                    <input type="radio" name="status_skripsi" id="2" value="Sedang" class="peer hidden" />
                    <label for="2" class="block cursor-pointer select-none rounded-xl p-2 text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white">Sedang</label>
                </div>
        
                <div>
                    <input type="radio" name="status_skripsi" id="3" value="Lulus" class="peer hidden" />
                    <label for="3" class="block cursor-pointer select-none rounded-xl p-2 text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white">Lulus</label>
                </div>
            </div>
            @error('status_skripsi')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="row-start-2 cols-span-2 font-bold">
            <h1 class="font-bold">Nilai</h1>
            <div class="grid w-[28rem] rounded-xl bg-gray-200 p-2">
                <input type="text" name="nilai" id="nilai" placeholder="Masukkan nilai" value="{{ old('nilai') }}" class="input input-ghost w-full max-w-" />
            </div>
            @error('nilai')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="row-start-1 row-span-2 font-bold">
            <h1 class="font-bold">Unggah Berita Acara</h1>
            <div class="form-control w-full max-w-xs">
                <input type="file" name="scan_skripsi" id="scan_skripsi" class="file-input file-input-bordered w-full max-w-xs" />
            </div>
            @error('scan_skripsi')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="row-start-3 col-start-2 place-self-center">
            <button type="submit" class="btn btn-neutral rounded-full">Simpan</button>
        </div>
    </div>
</form>

@endsection