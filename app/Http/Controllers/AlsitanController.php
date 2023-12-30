<?php

namespace App\Http\Controllers;

use App\Models\Alsitan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AlsitanController extends Controller
{
    public function index(){
        return view('alsitan.index', ['alsitans' => Alsitan::latest()->paginate(20)]);
    }
    public function create(){
        return view('alsitan.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'no_alat' => 'required|unique:alsitans,no_alat',
            'no_rangka' => 'required|unique:alsitans,no_rangka',
            'no_mesin' => 'required|unique:alsitans,no_mesin',
            'merek' => 'required',
            'tipe' => 'required',
            'tahun' => 'required',
            'kode' => 'required|max:100|unique:alsitans,kode'
        ]);
        Alsitan::create($data);
        Alert::success('Berhasil', 'Data alsitan berhasil ditambahkan!');
        return redirect()->route('alsitan.index');
    }
    public function edit(Alsitan $alsitan){
        return view('alsitan.edit', ['alsitan' => $alsitan]);
    }
    public function update(Request $request, Alsitan $alsitan){
        $data = $request->validate([
            'name' => 'required',
            'no_alat' => 'required|unique:alsitans,no_alat,' . $alsitan->id,
            'no_rangka' => 'required|unique:alsitans,no_rangka,' . $alsitan->id,
            'no_mesin' => 'required|unique:alsitans,no_mesin,' . $alsitan->id,
            'merek' => 'required',
            'tipe' => 'required',
            'tahun' => 'required',
            'kode' => 'required|max:100|unique:alsitans,kode,' . $alsitan->kode,
        ]);
        $alsitan->update($data);
        Alert::success('Berhasil', 'Data alsitan berhasil diupdate!');
        return redirect()->back();
    }
    public function delete(Alsitan $alsitan){
        $alsitan->delete();
        Alert::success('Berhasil', 'Data alsitan berhasil dihapus!');
        return redirect()->back();
    }
}
