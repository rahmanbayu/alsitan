<?php

namespace App\Http\Controllers;

use App\Models\Persyaratan;
use Barryvdh\DomPDF\Facade\Pdf;
use Codedge\Fpdf\Facades\Fpdf;
use Codedge\Fpdf\Fpdf\Fpdf as FpdfFpdf;
use Illuminate\Http\Request;

class SpkController extends Controller
{
    public function index(Persyaratan $persyaratan){
        if($persyaratan->status !== 'disetujui' || $persyaratan->petani->blacklist_at != null){
            abort(404);
        }
        $persyaratan = Persyaratan::with(['petani', 'alsitan'])->first();

        return view('export.spk', ['persyaratan' => $persyaratan]);
    }
}
