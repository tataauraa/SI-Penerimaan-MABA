<!DOCTYPE html>
<html>
<head>
    <title>PDF</title>
    <style>
        .table, th, td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    
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
            </tr>
        </thead>
        <tbody>
            @foreach($data as $mahasiswa)
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
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
