@extends('layouts.main')

@section('container')
<script>
    let angkatan = document.getElementById('angkatan');
    let currentYear = new Date().getFullYear();
    let earliestYear = 2000;
    while (currentYear >= earliestYear) {
        let dateOption = document.createElement('option');
        dateOption.text = currentYear;
        dateOption.value = currentYear;
        angkatan.add(dateOption);
        currentYear -= 1;
    }
</script>
<h1>Buat akun mahasiswa baru</h1>
<div class="row g-5">
  <form action="/buat/mahasiswa" method="post">
    @csrf
    <div class="col-md-7 col-lg-8">
      <div class="row g-3">

        <div class="col-12">
            <label for="nip" class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control @error('nim') is-invalid @enderror" id="nim" placeholder="" value="{{ old('nim') }}">
            @error('nim')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="" value="{{ old('nama') }}">
            @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="" value="{{ old('email') }}">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
            <label for="angkatan" class="form-label">Angkatan</label>
            <select id="angkatan" name="angkatan" class="form-select @error('angkatan') is-invalid @enderror" value="{{ old('angkatan') }}">
                <option value="" selected disabled>Pilih angkatan</option>
            </select>
            @error('angkatan')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
            <label for="status" class="form-label">Status</label>
            <select id="status" name="status" class="form-select @error('status') is-invalid @enderror" value="{{ old('status') }}">
                <option value="" selected disabled>Pilih status</option>
                <option value="1">Aktif</option>
                <option value="2">Nonaktif</option>
                <option value="3">Cuti</option>
            </select>
            @error('status')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
            <label for="jalur_masuk" class="form-label">Jalur masuk</label>
            <select id="jalur_masuk" name="jalur_masuk" class="form-select @error('jalur_masuk') is-invalid @enderror" value="{{ old('jalur_masuk') }}">
                <option value="" selected disabled>Pilih jalur masuk</option>
                <option value="1">SNBP</option>
                <option value="2">SNBT</option>
                <option value="3">Mandiri</option>
            </select>
            @error('jalur_masuk')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="col-12">
            <label for="dosen_wali" class="form-label">Dosen wali</label>
            <select id="dosen_wali" name="dosen_wali" class="form-select @error('dosen_wali') is-invalid @enderror" value="{{ old('dosen_wali') }}">
                <option value="" selected disabled>Pilih dosen wali</option>
                @foreach ($dosen_wali as $doswal)
                    <option value="{{ $doswal->id }}"> {{ $doswal->nama }}</option>
                @endforeach
            </select>
            @error('jalur_masuk')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
      <hr class="my-4">

      <button class="w-100 btn btn-primary btn-lg" type="submit">Simpan</button>
    </form>
  </div>
</div>
@endsection