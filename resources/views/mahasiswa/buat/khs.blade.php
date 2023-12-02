@extends('partials.sidebar')
@section('container')

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
            <form action="/buat/khs" method="post" enctype="multipart/form-data">
                @csrf
                <div class="grid grid-cols-1 gap-8">
                    <!-- form fields -->
                    <div class="mb-2">
                        <div>
                            <label for="semester" class="block text-grey-darker text-sm font-bold mb-2">Semester</label>
                            <select id="semester" name="semester" class="border rounded w-full py-2 px-3 text-black @error('semester') @else  is-invalid @enderror" value="{{ old('semester') }}">
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
                            <label for="sks_semester" class="block text-grey-darker text-sm font-bold mb-2">Jumlah SKS semester</label>
                            <input type="text" name="sks_semester" class="border rounded w-full py-2 px-3 text-black @error('sks_semester') is-invalid @else  @enderror" id="sks_semester" placeholder="Masukkan jumlah SKS semester" value="{{ old('sks_semester') }}">
                            @error('sks_semester')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="sks_total" class="block text-grey-darker text-sm font-bold mb-2">Jumlah SKS kumulatif</label>
                            <input type="text" name="sks_total" class="border rounded w-full py-2 px-3 text-black @error('sks_total') is-invalid @else  @enderror" id="sks_total" placeholder="Masukkan jumlah SKS kumulatif" value="{{ old('sks_total') }}">
                            @error('sks_total')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="ips" class="block text-grey-darker text-sm font-bold mb-2">IPS</label>
                            <input type="text" name="ips" class="border rounded w-full py-2 px-3 text-black @error('ips') is-invalid @else  @enderror" id="ips" placeholder="Masukkan nilai IPS" value="{{ old('ips') }}">
                            @error('ips')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="ipk" class="block text-grey-darker text-sm font-bold mb-2">IPK</label>
                            <input type="text" name="ipk" class="border rounded w-full py-2 px-3 text-black @error('ipk') is-invalid @else  @enderror" id="ipk" placeholder="Masukkan nilai IPK" value="{{ old('ipk') }}">
                            @error('ipk')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-2">
                        <div>
                            <label for="scan_khs" class="block text-grey-darker text-sm font-bold mb-2">Upload scan KHS</label>
                            <input type="file" name="scan_khs" class="border rounded w-full py-2 px-3 text-black @error('scan_khs') is-invalid @else  @enderror" id="scan_khs">
                            @error('scan_khs')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="flex justify-center gap-2">
                        <button type="submit" class="btn btn-primary">Buat</button>

                        <a href="/riwayat/irs" class="btn btn-error">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection