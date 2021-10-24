<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tren extends Model
{
    protected $table = 'tren';
    protected $fillable = ['trenket', 'trenang','avatar'];

    public function kasus()
    {
        return $this->belongsTomany(Kasus::class)->withPivot(['jumlah'])->withTimestamps();
    }
}   
