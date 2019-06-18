<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HargaKomoditas extends Model
{
    protected $table = 'harga_komoditas';

    public function komoditas()
    {
        return $this->belongsTo(Komoditas::class, 'komoditas_id');
    }

    public function pedagang()
    {
        return $this->belongsTo(Pedagang::class, 'pedagang_id');
    }

    public function petugas()
    {
        return $this->belongsTo(User::class, 'petugas_id');
    }
}
