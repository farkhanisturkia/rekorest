<?php

namespace App\Models;

use App\Models\Profil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Training extends Model
{
    use HasFactory;

    protected $fillable = [
        'profil_id',
        'is_testing',
        'resto_name',
        'tanggapan_m',
        'tanggapan_p',
        'tanggapan_s',
        'kategori_m',
        'kategori_p',
        'kategori_s',
    ];

    public function profil(){
        return $this->belongsTo(Profil::class, 'profil_id');
    }
}
