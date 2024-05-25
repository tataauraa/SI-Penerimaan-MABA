<?php

namespace App\Http\Controllers;

use App\Models\CalonMahasiswa;
use Illuminate\Http\Request;
use PDF;

class CalonMahasiswaController extends Controller
{
    public function index()
    {
        $calon_mahasiswa = CalonMahasiswa::all();
        return view('calon_mahasiswa.index', compact('calon_mahasiswa'));
    }

    public function create()
    {
        return view('calon_mahasiswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required',
            'NISN' => 'required|unique:calonmhs',
            'TTL' => 'required',
            'Alamat' => 'required',
            'No_Telp' => 'required',
            'Email' => 'required|email',
            'Jenis_Kelamin' => 'required',
            'Agama' => 'required',
            'Asal_Sekolah' => 'required',
            'Nama_Ayah' => 'required',
            'Pekerjaan_Ayah' => 'required',
            'Nama_Ibu' => 'required',
            'Pekerjaan_Ibu' => 'required',
        ]);
        $data = $request->except('_token');
        $data['id_calonmhs'] = CalonMahasiswa::count()+1;
        CalonMahasiswa::create($data);

        return redirect()->route('calon-mahasiswa.index')
                        ->with('success','Data Calon Mahasiswa created successfully.');
    }

    public function show(CalonMahasiswa $calonMahasiswa)
    {
        return view('calon_mahasiswa.show',compact('calonMahasiswa'));
    }

    public function edit(CalonMahasiswa $calonMahasiswa)
    {
        return view('calon_mahasiswa.edit',compact('calonMahasiswa'));
    }

    public function update(Request $request, CalonMahasiswa $calonMahasiswa)
    {
        $request->validate([
            'Nama' => 'required',
            'TTL' => 'required',
            'Alamat' => 'required',
            'No_Telp' => 'required',
            'Email' => 'required|email',
            'Jenis_Kelamin' => 'required',
            'Agama' => 'required',
            'Asal_Sekolah' => 'required',
            'Nama_Ayah' => 'required',
            'Pekerjaan_Ayah' => 'required',
            'Nama_Ibu' => 'required',
            'Pekerjaan_Ibu' => 'required',
        ]);

        $calonMahasiswa->update($request->except(['_token', '_method']));

        return redirect()->route('calon-mahasiswa.index')
                        ->with('success','Data Calon Mahasiswa updated successfully');
    }

    public function destroy(String $id_calonmhs)
    {
        $calonMahasiswa=calonMahasiswa::find($id_calonmhs);
        $calonMahasiswa->delete();


        return redirect()->route('calon-mahasiswa.index')
                        ->with('success','Data Calon Mahasiswa deleted successfully');
    }

    public function generatePDF()
    {
        $data = [
            'title' => 'Welcome to Laravel PDF',
            'data' => CalonMahasiswa::all()
        ];

        $pdf = PDF::loadView('myPDF', $data)->setPaper('A4', 'Landscape');

        return $pdf->download('document.pdf');
    }
}
