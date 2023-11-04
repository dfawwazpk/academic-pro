@extends('partials.sidebar')

@section('container')

<div class="text-center font-bold ">Buat akun Mahasiswa Baru</div>

<div class="flex justify-center items-center">
    <div class="w-full md:w-1/2">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="flex justify-center items-center ">
            <div class="w-full md:w-5/6 bg-black rounded-md p-8">
                <form action="/buat/mahasiswa" method="post">
                    @csrf
                    <div class="grid grid-cols-1 gap-8 ">
                        <!-- form fields -->
                        <div>
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" name="nim" class="form-input bg-white @error('nim') is-invalid @else text-black @enderror" id="nim" placeholder="" value="{{ old('nim') }}">
                            @error('nim')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        
        
                        <div>
                            <label for="nama" class="form-label">Nama Lengkap</label>
                            <input type="text" name="nama" class="form-input bg-white @error('nama') is-invalid  @else text-black @enderror" id="nama" placeholder="" value="{{ old('nama') }}">
                            @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
        
                        <div>
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-input bg-white @error('email') is-invalid @else text-black @enderror" id="email" placeholder="" value="{{ old('email') }}">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
        
                        <div>
                            <label for="angkatan" class="form-label">Angkatan</label>
                            <select id="angkatan" name="angkatan" class="form-select bg-white @error('angkatan') @else text-black is-invalid @enderror" value="{{ old('angkatan') }}">
                                <option value="" selected disabled>Pilih angkatan</option>
                                <option value="2023">2023</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                            </select>
                            @error('angkatan')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
        
                        <div>
                            <label for="status" class="form-label">Status</label>
                            <select id="status" name="status" class="form-select bg-white @error('status') @else text-black is-invalid  @enderror" value="{{ old('status') }}">
                                <option value="" selected disabled>Pilih status</option>
                                @foreach ($status as $stat)
                                    <option value="{{ $stat->id }}"> {{ $stat->name }}</option>
                                @endforeach
                            </select>
                            @error('status')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
        
                        <div>
                            <label for="jalur_masuk" class="form-label">Jalur masuk</label>
                            <select id="jalur_masuk" name="jalur_masuk" class="form-select bg-white @error('jalur_masuk') @else text-black is-invalid @enderror" value="{{ old('jalur_masuk') }}">
                                <option value="" selected disabled>Pilih jalur masuk</option>
                                @foreach ($jalur_masuk as $jalur)
                                    <option value="{{ $jalur->id }}"> {{ $jalur->name }}</option>
                                @endforeach
                            </select>
                            @error('jalur_masuk')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
        
                        <div>
                            <label for="dosen_wali" class="form-label">Dosen wali</label>
                            <select id="dosen_wali" name="dosen_wali" class="form-select bg-white @error('dosen_wali') @else text-black is-invalid @enderror" value="{{ old('dosen_wali') }}">
                                <option value="" selected disabled>Pilih dosen wali</option>
                                @foreach ($dosen_wali as $doswal)
                                    <option value="{{ $doswal->id }}"> {{ $doswal->nama }}</option>
                                @endforeach
                            </select>
                            @error('dosen_wali')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
        
                        <div class="flex justify-center">
                            <button type="submit" class="btn btn-primary">Buat</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
                    </div>
                </form>
            </div>
        </div>
           
@endsection