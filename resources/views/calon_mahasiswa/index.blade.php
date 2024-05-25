@extends('layout.app')
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Calon Mahasiswa</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <a href="{{ route('calon-mahasiswa.create') }}" class="btn btn-primary mb-3">Add</a>
            <a href="{{ URL('generate-pdf') }}" class="btn btn-primary mb-3">Report</a>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>NISN</th>
                        <th>Tempat Tanggal Lahir</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Email</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Asal Sekolah</th>
                        <th>Nama Ayah</th>
                        <th>Pekerjaan Ayah</th>
                        <th>Nama Ibu</th>
                        <th>Pekerjaan Ibu</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($calon_mahasiswa as $mahasiswa)
                    <tr>
                        <td>{{ $mahasiswa->id_calonmhs }}</td>
                        <td>{{ $mahasiswa->Nama }}</td>
                        <td>{{ $mahasiswa->NISN }}</td>
                        <td>{{ $mahasiswa->TTL }}, {{ $mahasiswa->tanggal_lahir }}</td>
                        <td>{{ $mahasiswa->Alamat }}</td>
                        <td>{{ $mahasiswa->No_Telp }}</td>
                        <td>{{ $mahasiswa->Email }}</td>
                        <td>{{ $mahasiswa->Jenis_Kelamin }}</td>
                        <td>{{ $mahasiswa->Agama }}</td>
                        <td>{{ $mahasiswa->Asal_Sekolah }}</td>
                        <td>{{ $mahasiswa->Nama_Ayah }}</td>
                        <td>{{ $mahasiswa->Pekerjaan_Ayah }}</td>
                        <td>{{ $mahasiswa->Nama_Ibu }}</td>
                        <td>{{ $mahasiswa->Pekerjaan_Ibu }}</td>
                        <td>
                            <form action="{{ route('calon-mahasiswa.destroy',$mahasiswa->id_calonmhs) }}" method="POST">
                                <a class="btn btn-info" href="{{ route('calon-mahasiswa.show',$mahasiswa->id_calonmhs) }}">Show</a>
                                <a class="btn btn-primary" href="{{ route('calon-mahasiswa.edit',$mahasiswa->id_calonmhs) }}">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection