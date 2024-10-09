<?php

namespace App\Http\Controllers;

use App\Models\Persyaratan;
use Illuminate\Http\Request;

class SuratPernyataanController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Persyaratan $persyaratan)
    {
        if($persyaratan->status !== 'disetujui' || $persyaratan->petani->blacklist_at != null){
            abort(404);
        }
        return view('export.pernyataan', ['persyaratan' => $persyaratan]);
    }
}
