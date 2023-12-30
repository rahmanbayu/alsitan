<?php

namespace App\Http\Controllers;

use App\Models\Petani;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use RealRashid\SweetAlert\Facades\Alert;

class PetaniController extends Controller
{
    public function index(){
        return view('petani.index', ['petanis' => Petani::latest()->paginate(20)]);
    }
    public function show(Petani $petani){
        return view('petani.show', ['petani' => $petani]);
    }
    public function create(){
        return view('petani.create');
    }
    public function store(Request $request){
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'nik' => 'required|unique:petanis,nik|digits:16',
            'nama_kelompok' => 'required|string|max:255',
            'alamat' => 'required|max:400',
            'luas_lahan' => 'required|numeric',
            'kordinat_lahan' => 'required',
            'job' => 'required|max:50',
            'phone' => 'required|string|max:16',
        ]);
        Petani::create($request->only([ 'name', 'nik', 'nama_kelompok', 'alamat', 'luas_lahan', 'kordinat_lahan', 'job', 'phone'])); 
        Alert::success('Berhasil', 'Data petani berhasil ditambahkan!');
        return redirect()->route('petani.index');
    }
    public function edit(Petani $petani){
        return view('petani.edit', ['petani' => $petani]);
    }
    public function update(Request $request, Petani $petani){
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'nik' => 'required|unique:petanis,nik,'.$petani->id.'|digits:16',
            'nama_kelompok' => 'required|string|max:255',
            'alamat' => 'required|max:400',
            'luas_lahan' => 'required|numeric',
            'kordinat_lahan' => 'required',
            'job' => 'required|max:50',
            'phone' => 'required|string|max:16',
        ]);
        $petani->update($request->only([ 'name', 'nik', 'nama_kelompok', 'alamat', 'luas_lahan', 'kordinat_lahan', 'phone', 'job']));
        Alert::success('Berhasil', 'Data petani berhasil diupdate!');
        return redirect()->back();
    }
    public function delete(Petani $petani){
        $petani->delete();
        Alert::success('Berhasil', 'Data petani berhasil dihapus!');
        return redirect()->back();
    }

    public function blacklist(Petani $petani){
        return view('petani.blacklist', ['petani' => $petani]);
    }

    public function blacklist_action(Petani $petani, Request $request){
        $request->validate(['reason' => 'required|max:400', 'blacklist_at' => 'required|date']);
        $petani->blacklist_at = $request->blacklist_at;
        $petani->blacklist_reason = $request->reason;
        $petani->save();
        Alert::success('Berhasil', 'Petani berhasil diblacklist!');
        return redirect()->route('petani.index');
    }

    public function un_blacklist(Petani $petani){
        if($petani->blacklist_at == null){
            abort(404);
        }
        return view('petani.un_blacklist', ['petani' => $petani]);
    }

    public function un_blacklist_action(Petani $petani){
        $petani->blacklist_at = null;
        $petani->blacklist_reason = null;
        $petani->save();

        Alert::success('Berhasil', 'Petani berhasil dihapus dari daftar blacklist!');

        return redirect()->route('petani.index');
    }
}
