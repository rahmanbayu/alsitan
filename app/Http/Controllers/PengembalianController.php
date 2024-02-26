<?php

namespace App\Http\Controllers;

use App\Models\Persyaratan;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index(){
        return view('pengembalian/index', [
            'persyaratans' => Persyaratan::latest()->with(['alsitan', 'petani'])->paginate(20),
        ]);
    }

    public function export(Persyaratan $persyaratan){
        return view('export.pengembalian', ['persyaratan' => $persyaratan]);
    }
}
