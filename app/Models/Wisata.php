<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    protected $fillable = [         
        'nama_wisata',         
        'lokasi',         
        'harga',    
    ];

    public function pemesanan()
    {
        return $this->hasMany(Pemesanan::class);
    }
}
