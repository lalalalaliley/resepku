<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResepMakanan extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'user_id',
        'deskripsi',
        'bahan_makanan',
        'langkah_pembuatan',
        'foto_makanan',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function sukaResep()
    {
        return $this->hasMany(SukaResep::class, 'resep_id');
    }
}
