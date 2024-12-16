<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
    use HasFactory;

    public function kategori() {
        return $this->belongsTo(kategori::class);
    }
    public function jadwal() {
        return $this->hasMany(jadwal::class);
    }
    public function antrian() {
        return $this->hasMany(antrian::class);
    }
    

}
