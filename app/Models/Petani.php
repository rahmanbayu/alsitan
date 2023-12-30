<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petani extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $casts = ['blacklist_at' => 'date'];
}
