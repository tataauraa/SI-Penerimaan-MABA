@extends('layout.app')
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="card">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Calon Mahasiswa / Create</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('calon-mahasiswa.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name="Nama" value="{{ old('Nama') }}" id="Nama" >
            </div>
            <div class="mb-3">
                <label for="NISN" class="form-label">NISN</label>
                <input type="text" class="form-control" name="NISN" value="{{ old('NISN') }}" id="NISN" >
            </div>
            <div class="mb-3">
                <label for="TTL" class="form-label">Tempat Tanggal Lahir</label>
                <input type="text" class="form-control" name="TTL" value="{{ old('TTL') }}" id="TTL" >
            </div>
            <div class="mb-3">
                <label for="Alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" name="Alamat" value="{{ old('Alamat') }}" id="Alamat" >
            </div>
            <div class="mb-3">
                <label for="No_Telp" class="form-label">No telepon</label>
                <input type="text" class="form-control" name="No_Telp" value="{{ old('No_Telp') }}" id="No_Telp" >
            </div>
            <div class="mb-3">
                <label for="Email" class="form-label">Email</label>
                <input type="text" class="form-control" name="Email" value="{{ old('Email') }}"id="Email" >
            </div>
            <div class="mb-3">
                <label for="Jenis_Kelamin" class="form-label">Jenis Kelamin</label>
                <select name="Jenis_Kelamin" id="Jenis_Kelamin" class="form-control">
                    <option value="" selected disabled hidden>Pilih Jenis Kelamin</option>
                    <option value="Laki - Laki" {{ old('Jenis_Kelamin') == 'Laki - Laki' ? 'selected':'' }}>Laki - Laki</option>
                    <option value="Perempuan" {{ old('Jenis_Kelamin') == 'Perempuan' ? 'selected':'' }}>Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="Agama" class="form-label">Agama</label>
                <input type="text" class="form-control" name="Agama" value="{{ old('Agama') }}"id="Agama" >
            </div>
            <div class="mb-3">
                <label for="Asal_sekolah" class="form-label">Asal Sekolah</label>
                <input type="text" class="form-control" name="Asal_Sekolah" value="{{ old('Asal_Sekolah') }}"id="Asal_Sekolah" >
            </div>
            <div class="mb-3">
                <label for="Nama_Ayah" class="form-label">Nama Ayah</label>
                <input type="text" class="form-control" name="Nama_Ayah" value="{{ old('Nama_Ayah') }}"id="Nama_Ayah" >
            </div>
            <div class="mb-3">
                <label for="Pekerjaan_Ayah" class="form-label">Pekerjaan Ayah</label>
                <input type="text" class="form-control" name="Pekerjaan_Ayah" value="{{ old('Pekerjaan_Ayah') }}"id="Pekerjaan_Ayah" >
            </div>
            <div class="mb-3">
                <label for="Nama_Ibu" class="form-label">Nama Ibu</label>
                <input type="text" class="form-control" name="Nama_Ibu" value="{{ old('Nama_Ibu') }}"id="Nama_Ibu" >
            </div>
            <div class="mb-3">
                <label for="Pekerjaan_Ibu" class="form-label">Pekerjaan Ibu</label>
                <input type="text" class="form-control" name="Pekerjaan_Ibu" value="{{ old('Pekerjaan_Ibu') }}"id="Pekerjaan_Ibu" >
            </div>
            <button type="submit" class="btn btn-primary float-end">Tambah</button>
            </form>
    </div>
</div>
@endsection