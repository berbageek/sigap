<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komoditas extends Model
{
    protected $table = 'komoditas';

    public function jenisKomoditas()
    {
        return $this->belongsTo(JenisKomoditas::class, 'jenis_komoditas_id');
    }

    public function satuan()
    {
        return $this->belongsTo(Satuan::class, 'satuan_id');
    }

    public function harga()
    {
        return $this->hasMany(HargaKomoditas::class, 'komoditas_id');
    }
}
