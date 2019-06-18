<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pasar extends Model
{
    protected $table = 'pasar';

    public function pedagang()
    {
        return $this->hasMany(Pedagang::class, 'pasar_id');
    }
}
