<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kasus extends Model
{
    protected $table = 'kasus';
    protected $fillable = ['tahun'];

    public function tren()
    {
        return $this->belongsToMany(Tren::class)->withPivot(['jumlah']);
    }
}
