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
        <h6 class="m-0 font-weight-bold text-primary">Calon Mahasiswa / Edit</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('calon-mahasiswa.update', $calonMahasiswa->id_calonmhs) }}" method="POST">
            @csrf
            @method('PUT')
            <!-- Form fields here -->

            <button type="submit" class="btn btn-primary float-end">Update</button>
        </form>

        <!-- Delete button form -->
        <form action="{{ route('calon-mahasiswa.destroy', $calonMahasiswa->id_calonmhs) }}" method="POST" class="mt-2">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger float-start">Delete</button>
        </form>
    </div>
</div>
@endsection
