<?php

namespace App\Http\Controllers;

use App\Models\Alsitan;
use App\Models\Persyaratan;
use App\Models\Petani;
use App\Rules\NikNotBlacklisted;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class PersyaratanController extends Controller
{
    public function index(){
        return view('persyaratan.index', [
            'alsitans' => Alsitan::get(),
        ]);
    }
    public function store(Request $request){
        $request->validate([
            'nik' => ['required', 'exists:petanis,nik', new NikNotBlacklisted],
            'alat' => 'required|exists:alsitans,id',
            'mulai' => 'required|date|before:sampai_dengan',
            'sampai_dengan' => 'required|date|after:mulai',
            'pembayaran' => 'required|numeric',
            'pembayaran_dalam_bahasa' => 'required|string|max:400',
            'bukti_pembayaran' => 'required|file|mimes:jpg,png,jpeg',
            'ktp' => 'required|file|mimes:jpg,png,jpeg',
            'rekomendasi' => 'required|file|mimes:pdf',
            'proposal' => 'required|file|mimes:pdf',
            'harga_perhari' => 'required|numeric'
        ]);

        Persyaratan::create([
            'petani_id' => Petani::where('nik', $request->nik)->first()->id,
            'alsitan_id' => $request->alat,
            'mulai' => $request->mulai,
            'sampai_dengan' => $request->sampai_dengan,
            'pembayaran' => $request->pembayaran,
            'pembayaran_dalam_bahasa' => $request->pembayaran_dalam_bahasa,
            'bukti_pembayaran' => $request->file('bukti_pembayaran')->store('bukti_pembayaran'),
            'ktp' => $request->file('ktp')->store('ktp'),
            'rekomendasi' => $request->file('rekomendasi')->store('rekomendasi'),
            'proposal' => $request->file('proposal')->store('proposal'),
            'biaya_perhari' => $request->harga_perhari
        ]);

        Alert::success('Berhasil', 'Data persyaratan berhasil ditambahkan!');
        return redirect()->back();
    }

    public function check_nik(Request $request){
        $petani = Petani::where('nik', $request->nik)->first();
        if(!$petani){
            return response()->json(['message' => 'Petani tidak ditemukan!', Response::HTTP_NOT_FOUND]);
        }else if($petani->blacklist_at != null){
            return response()->json(['message' => 'Petani di blacklist!', Response::HTTP_FORBIDDEN]);
        }
        return response()->json(['petani' => $petani], Response::HTTP_OK);
    }

    public function asset(Request $request, Persyaratan $persyaratan){
        $request->validate([
            'show' => 'required|in:bukti_pembayaran,ktp,rekomendasi,proposal'
        ]);
        if($request->has('download')){
            return Storage::download($persyaratan[$request->show]);
        }else{
            return Storage::get($persyaratan[$request->show]);
        }
    }
}
