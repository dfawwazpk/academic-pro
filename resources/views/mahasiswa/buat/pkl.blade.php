@extends('partials.sidebar')
@section('container')

<div class="sm:p-6 mb-4">
    <h1 class="text-2xl md:text-3xl text-black font-bold mb-1">Input PKL</h1>
</div>

<div class="grid grid-cols-3 grid-rows-3 p-10">
    <div class="row-start-1 col-span-2 font-bold">Status
        <div class="grid w-[28rem] grid-cols-3 gap-2 rounded-xl bg-gray-200 p-2">
            <div>
                <input type="radio" name="option" id="1" value="1" class="peer hidden" checked />
                <label for="1" class="block cursor-pointer select-none rounded-xl p-2 text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white">Belum</label>
            </div>
    
            <div>
                <input type="radio" name="option" id="2" value="2" class="peer hidden" />
                <label for="2" class="block cursor-pointer select-none rounded-xl p-2 text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white">Sedang</label>
            </div>
    
            <div>
                <input type="radio" name="option" id="3" value="3" class="peer hidden" />
                <label for="3" class="block cursor-pointer select-none rounded-xl p-2 text-center peer-checked:bg-blue-500 peer-checked:font-bold peer-checked:text-white">Lulus</label>
            </div>
        </div>
    </div>
    <div class="row-start-2 cols-span-2 font-bold">
        <h1 class="font-bold">Nilai</h1>
        <div class="grid w-[28rem] rounded-xl bg-gray-200 p-2">
            <input type="text" placeholder="Type here" class="input input-ghost w-full max-w-" />
        </div>
    </div>
    <div class="row-start-1 row-span-2 font-bold">
        <h1 class="font-bold">Unggah Berita Acara</h1>
        <div class="form-control w-full max-w-xs">
            <input type="file" class="file-input file-input-bordered w-full max-w-xs" />
          </div>
    </div>
    <div class="row-start-3 col-start-2 place-self-center">
        <button class="btn btn-neutral rounded-full">Simpan</button>
    </div>
</div>
@endsection