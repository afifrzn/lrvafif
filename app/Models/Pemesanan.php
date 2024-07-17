<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    protected $fillable = [         
        'User_id',         
        'Wisata_id',         
    ];

    public function wisata()
    {
        return $this->belongsTo(Wisata::class,'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'id');
    }
}
