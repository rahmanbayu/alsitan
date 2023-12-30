<?php

namespace App\Http\Controllers;

use App\Models\Persyaratan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PersetujuanController extends Controller
{
    public function index(){
        return view('persetujuan/index', [
            'persyaratans' => Persyaratan::latest()->with(['alsitan', 'petani'])->paginate(20),
        ]);
    }
    public function show(Persyaratan $persyaratan){
        $persyaratan->load(['petani', 'alsitan']);
        return view('persetujuan/show', [
            'persyaratan' => $persyaratan,
        ]);
    }

    public function approve(Persyaratan $persyaratan){
        $persyaratan->status = 'disetujui';
        $persyaratan->save();
        Alert::success('Berhasil', 'Disetujui!');
        return redirect()->back();
    }

    public function decline(Persyaratan $persyaratan){
        $persyaratan->status = 'ditolak';
        $persyaratan->save();
        Alert::success('Berhasil', 'Ditolak!');
        return redirect()->back();
    }

    public function delete(Persyaratan $persyaratan){
        Storage::delete($persyaratan->ktp);
        Storage::delete($persyaratan->rekomendasi);
        Storage::delete($persyaratan->proposal);
        Storage::delete($persyaratan->bukti_pembayaran);
        $persyaratan->delete();
        Alert::success('Berhasil', 'Data berhasil dihapus!');
        return redirect()->back();
    }
}
