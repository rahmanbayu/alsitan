<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persyaratan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $casts = [
        'mulai' => 'date',
        'sampai_dengan' => 'date',
    ];


    public function petani(){
        return $this->belongsTo(Petani::class);
    }
    public function alsitan(){
        return $this->belongsTo(Alsitan::class);
    }
}
