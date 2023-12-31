<?php

namespace App\Http\Controllers;

use App\Exports\LaporanExport;
use App\Models\Persyaratan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LaporanController extends Controller
{
    public function index(){
        $startDate = request('awal');
        $endDate = request('akhir');
        return view('laporan.index', [
            'persyaratans' => Persyaratan::latest()->with(['alsitan', 'petani'])->whereBetween('created_at', [$startDate, $endDate])->where('status', 'disetujui')->get(),
        ]);
    }

    public function download(Request $request){
        $request->validate([
            'awal' => 'required|date|before:akhir',
            'akhir' => 'required|date|after:awal'
        ]);
        return Excel::download(new LaporanExport, 'laporan.xlsx');
    }
}
