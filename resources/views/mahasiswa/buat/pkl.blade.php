@extends('partials.sidebar')
@section('container')
<main class="grid min-h-screen w-full place-items-center">
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
</main>
@endsection