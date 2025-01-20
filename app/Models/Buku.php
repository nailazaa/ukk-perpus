<?php

namespace App\Models;
use App\Models\Pinjam;
use App\Models\Ulasan;
use App\Models\KategoriBuku;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Buku extends Model
{
    use HasFactory;
    public function kategori_buku()
    {
        return $this->belongsTo(KategoriBuku::class);
    }

    public function pinjams()
    {
        return $this->hasMany(Pinjam::class);
    }

    public function ulasans()
    {
        return $this->hasMany(Ulasan::class);
    }
}
