<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedagang extends Model
{
    protected $table = 'pedagang';

    public function pasar()
    {
        return $this->belongsTo(Pasar::class, 'pasar_id');
    }
}
